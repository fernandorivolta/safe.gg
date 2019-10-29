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
  <link rel="stylesheet" type="text/css" href="/css/loading-bar.css" />
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

  <div class="container">
    <div class="row p-5">
      <div class="col-md-3" style="padding-right: 8px;">
        <div class="card bg-dark">
          <div class="row photo-card"
            style="background: linear-gradient(0deg, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url({{ asset('storage/'.$user->icon) }}); background-size: cover;background-repeat: no-repeat;background-position: center;">
            <div class="col-md-12">
              <div class="row pt-2 justify-content-end">
                <a href="/perfil"><i class="fas fa-ellipsis-v edit-icon"></i></a>
              </div>
              <div class="row h-75 align-items-end pt-2">
                <div class="col-md-8">
                  <div class="row">
                    <span class="white-font text-uppercase font-weight-bold"
                      style="text-shadow: 0 0 15px rgba(0,0,0,.8), 0 0 10px rgba(0,0,0,.8);">{{$user->name}}</span>
                  </div>
                  <div class="row">
                    <span class="font-username gray-light-font">{{'@'.$user->username}} </span>
                  </div>

                </div>

              </div>
            </div>

          </div>
          <div class="row align-items-center info-user-card">
            <div class="col-md-4 border-right border-gray">
              <div class="row justify-content-center">
                <span class="green-font font-big">100</span>
              </div>
              <div class="row justify-content-center">
                <span class="gray-light-font font-small">POSTS</span>
              </div>
            </div>
            <div class="col-md-4 border-right border-gray">
              <div class="row justify-content-center">
                <span class="green-font font-big">100</span>
              </div>
              <div class="row justify-content-center">
                <span class="gray-light-font font-small">SEGUIDORES</span>
              </div>
            </div>
            <div class="col-md-4">
              <div class="row justify-content-center">
                <span class="green-font font-big">100</span>
              </div>
              <div class="row justify-content-center">
                <span class="gray-light-font font-small">SEGUINDO</span>
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
              <textarea rows="3" cols="50" id="textarea" class="white-font feed-post-textarea"
                placeholder="O que voce esta pensando?" maxlength="240" autofocus></textarea>
              <div class="row">
                <div class="col-md-9 my-auto">
                </div>
                <div class="col-md-1 my-auto">
                  <!-- <div class="text-right text-muted textarea-count" id="textarea_feedback">0 / 240</div> -->
                  <div id="count" data-stroke-width="7" data-stroke="#ff9933" data-value="0" data-preset="circle"
                    class="ldBar label-center" data-max="240"></div>
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
            <div class="card bg-dark feed-body scroll" style="height: 100%;">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 id="modal-title" class="modal-title"></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="post">
            <div class="row">
              <div class="col-md-3">
                <img id="modal-img" class="img-fluid rounded">
              </div>
              <div class="col-md-9">
                <p id="modal-post" class="text-left"></p>
              </div>
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
            <textarea max-lenght="200" id="comentario" class="form-control textarea-comment" aria-label="With textarea"
              placeholder="Escreva sua reposta..."></textarea>
            <div class="input-group-append">
              <span id="btn-comentar" class="input-group-text btn btn-primary clickable">Comentar</span>
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
  $(window).on("load", function () {
    get_match_data({{ $user-> id}});
  get_rank_data_feed({{ $user-> id}});
    });

  /* get_rank_data_feed({{ $user-> id}}); */




</script>

</html>