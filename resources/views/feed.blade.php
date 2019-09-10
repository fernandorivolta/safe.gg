<!DOCTYPE html>
<html>

<head>
    @include('lib.head')
    <link rel='stylesheet' type='text/css' href='/css/main.css'>
    <link rel='stylesheet' type='text/css' href='/css/feed.css'>
    <link rel='stylesheet' type='text/css' href='/css/navbar.css'>
    <link rel="stylesheet" href="/css/skeleton-loader.css">
    <script src='/js/data-api.js'></script>
    <script src='/js/feed.js'></script>
    <link rel="stylesheet" type="text/css" href="/css/loading-bar.css"/>
    <script type="text/javascript" src="/js/loading-bar.js"></script>
    <!-- <script>$(document).ready(function(){
            $('#loading_wrap').remove();
        });
    </script> -->
</head>

<body>
    @include('lib.navbar')

    <!-- <div class="d-flex justify-content-center my-auto" id="loading_wrap" style="z-index: 99999999; position: fixed; overflow: hidden; background-color: black; width: 100%; height: 100%; top: 0; left: 0; opacity: 0.998;">
	  <div class="loader my-auto" role="status">
	    <span class="sr-only">Loading...</span>
	  </div>
	</div> -->

    <!-- Icone Crop  -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Escolha seu Icone</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="post" action="/user/icon">
                    {{ csrf_field() }}
                    <div class="modal-body">
                        <!--Crop-->
                        <div class="image-editor">
                            <input type="file" class="cropit-image-input">
                            <div class="cropit-preview"></div>
                            <div class="row">
                                <input type="range" class="cropit-image-zoom-input slider mx-auto">
                            </div>
                            <input type="hidden" name="fileToUpload" id="fileToUpload" class="hidden-image-data"
                                required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                        <button type="submit" id="icon-button" class="btn btn-primary export">Salvar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!---->
    <div class="container">
        <div class="row">
            <div class="col-md-3" style="padding-right: 8px;">
                <div class="card bg-dark">
                    <img class="card-img-top img-fluid" id="user-capa"
                        src="/images/background/kaisa.jpg"
                        alt="user image">
                    <div class="card-body">
                        <div class="card-title">
                            <div class="user-card-pos">
                                <div class="row">
                                    <img class="user-icon img-fluid" id="user-icon"
                                        src="{{ asset('storage/'.$user->icon) }}" alt="user image">
                                    <button type="button" class="btn photo-change" data-toggle="modal"
                                        data-target="#exampleModal">
                                        <i class="fas fa-camera gray-font" style="height: 200%;"></i>
                                    </button>
                                    <span class="user-name my-auto white-font" id="user-name">{{$user->username}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="rank">
                    <br>
                    <div class="ph-item bg-dark">
                      <div class="ph-col-12">
                        <div class="ph-row">
                          <div class="ph-col-12 big"></div>
                        </div>
                      </div>
                      <div class="ph-col-2">
                        <div class="ph-avatar"></div>
                      </div>
                      <div>
                        <div class="ph-row">
                          <div class="ph-col-12"></div>
                          <div class="ph-col-12"></div>
                        </div>
                      </div>
                    </div>
                    <div class="ph-item bg-dark">
                      <div class="ph-col-12">
                        <div class="ph-row">
                          <div class="ph-col-12 big"></div>
                        </div>
                      </div>
                      <div class="ph-col-2">
                        <div class="ph-avatar"></div>
                      </div>
                      <div>
                        <div class="ph-row">
                          <div class="ph-col-12"></div>
                          <div class="ph-col-12"></div>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
            <div class="col-md-9" style="padding-left: 0px;">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card bg-dark feed-post">
                            <textarea rows="3" cols="50" id="textarea" class="bg-dark white-font feed-post-textarea" placeholder="O que voce esta pensando?" maxlength="240" autofocus></textarea>
                            <div class="row">
                                <div class="col-md-9 my-auto">
                                </div>
                                <div class="col-md-1 my-auto">
                                    <!-- <div class="text-right text-muted textarea-count" id="textarea_feedback">0 / 240</div> -->
                                    <div id="count"  data-stroke-width="7" data-stroke="purple" data-value="0" data-preset="circle" class="ldBar label-center" data-max="240"></div>
                                </div>
                                <div class="col-md-2 my-auto">
                                    <button id="btn-publicar" class="btn btn-primary btn-publicar">Publicar</button>
                                </div>
                            </div>
                        </div>
                    </div>   
                </div>  
                <div class="row">
                    <div class="col-md-12">
                        <div class="card bg-dark feed-body" style="height: 100%;">
                            
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </div>


    <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 id="modal-title" class="modal-title"></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-md-3">
                  <img id="modal-img" class="img-fluid rounded">
              </div>
              <div class="col-md-9">
                  <p id="modal-post" class="text-left"></p>
              </div>
            </div>
            <div class="row">
                <div class="col-md-12" style="padding: unset">
                  <div id="modal-comments" class="modal-comments">
                  </div>
                </div>
              </div>
          </div>
          <div class="modal-footer">
            <div class="input-group">
              <textarea class="form-control textarea-comment" aria-label="With textarea" placeholder="Escreva sua reposta..."></textarea>
              <div class="input-group-append">
                <span class="input-group-text btn btn-primary clickable">Comentar</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</body>
<script>    
    get_feed_data({{ $user-> id}});
    localStorage.setItem("user", JSON.stringify({!!$user!!}));
    //$("body").waitForImages(function () {
    $(window).on("load", function() {
        get_match_data({{ $user-> id}});
        get_rank_data_feed({{ $user-> id}});
    });
    
    /* get_rank_data_feed({{ $user-> id}}); */

    


</script>

</html>
