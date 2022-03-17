<!-- scripts -->
<script src="{{ url('https://code.jquery.com/jquery-3.5.1.slim.min.js') }}" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>
<script src="{{asset('assets/js/vendor.js')}}"></script>
<script src="{{asset('assets/js/app.js')}}"></script>
<script type="module" src="{{ url('https://unpkg.com/ionicons@5.1.2/dist/ionicons/ionicons.esm.js') }}"></script>
<script nomodule="" src="{{ url('https://unpkg.com/ionicons@5.1.2/dist/ionicons/ionicons.js') }}"></script>
<script>
    $(function(){
        $('.carousel').carousel({
            interval: 10000
        })
    });
</script>
<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $("#btnenviar").click(function (e) {
        e.preventDefault();
        var nombre = $('#nombre').val();
        var correo = $('#correo_electrónico').val();
        var telefono = $('#teléfono').val();
        var empresa = $('#empresa').val();
        var comentarios = $('#comentarios').val();
        $.ajax({
            type: "post",
            url: "{{ url('contacto') }}",
            data: {
                nombre: nombre,
                correo_electrónico: correo,
                teléfono: telefono,
                empresa: empresa,
                comentarios: comentarios
            }, success: function (data) {
                $('#modal-title').html("<strong>¡Gracias por tu mensaje!</strong>");
                $('#modal-response').html("<p>En breve un representante se comunicará contigo.</p>");
                $('#contacto').modal('show');
                $('#nombre').val('');
                $('#correo_electrónico').val('');
                $('#teléfono').val('');
                $('#empresa').val('');
                $('#comentarios').val('');
            }, error: function () {
                $('#modal-title').html("<strong>¡Ups! Hubo un problema.</strong>");
                $('#modal-response').html("<p>Ocurrió un error procesando la solicitud.</p> <p>Revisa que los campos estén completos o intenta más tarde.</p>");
                $('#contacto').modal('show');
            }
        });
    });
</script>
<script>
    //Habilita la vista de tarjetas en pantallas con resolución menor a 1024px
    $(function (){
        if(screen.width < 1024) {
            $('#component-1-2').addClass('active');
            $('#component-1-1').removeClass('active');
            $('#vista').hide();
        }else if (screen.width >= 1024){
            $('#component-1-2').removeClass('active');
            $('#component-1-1').addClass('active');
            $('#vista').show();
        }
    });
</script>

<!-- Messenger Plugin de chat Code -->
<div id="fb-root"></div>

<!-- Your Plugin de chat code -->
<div id="fb-customer-chat" class="fb-customerchat">
</div>

<script>
    var chatbox = document.getElementById('fb-customer-chat');
    chatbox.setAttribute("page_id", "102766930265441");
    chatbox.setAttribute("attribution", "biz_inbox");
</script>

<!-- Your SDK code -->
<script>
    window.fbAsyncInit = function() {
        FB.init({
            xfbml            : true,
            version          : 'v13.0'
        });
    };
    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/es_LA/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>
