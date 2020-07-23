<!-- scripts -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>
<script src="{{asset('assets/js/vendor.js')}}"></script>
<script src="{{asset('assets/js/app.js')}}"></script>
<script type="module" src="https://unpkg.com/ionicons@5.1.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule="" src="https://unpkg.com/ionicons@5.1.2/dist/ionicons/ionicons.js"></script>
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
