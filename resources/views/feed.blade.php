<!DOCTYPE html>
<html>

<head>
    @include('lib.head')
    <link rel='stylesheet' type='text/css' href='/css/main.css'>
    <link rel='stylesheet' type='text/css' href='/css/feed.css'>
    <link rel='stylesheet' type='text/css' href='/css/navbar.css'>
    <link rel="stylesheet" href="https://unpkg.com/placeholder-loading/dist/css/placeholder-loading.min.css">
    <script src='/js/data-api.js'></script>
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
                <div class="ph-item">
  <div class="ph-col-12">
    <div class="ph-picture"></div>
    <div class="ph-row">
      <div class="ph-col-4"></div>
      <div class="ph-col-8 empty"></div>
      <div class="ph-col-12"></div>
    </div>
  </div>
  <div class="ph-col-2">
    <div class="ph-avatar"></div>
  </div>
  <div>
    <div class="ph-row">
      <div class="ph-col-12"></div>
      <div class="ph-col-2"></div>
      <div class="ph-col-10 empty"></div>
      <div class="ph-col-8 big"></div>
      <div class="ph-col-4 big empty"></div>
    </div>
  </div>
</div>
                </div>
            </div>
            <div class="col-md-9" style="padding-left: 0px;">
                <div class="card bg-dark feed-body" style="height: 100%;">

                </div>
            </div>
        </div>
    </div>
</body>
<script>
    if(localStorage.getItem("user")){
        localStorage.removeItem("user");
    }
    localStorage.setItem("user", JSON.stringify({!!$user!!}));
    get_rank_data_feed({{ $user-> id}});

    $("body").waitForImages(function () {
        get_match_data({{ $user-> id}});
    });

</script>

</html>