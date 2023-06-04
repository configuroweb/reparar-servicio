<h1 class="pageTitle text-center">Información de Contacto</h1>
<hr class="mx-auto bg-primary border-primary opacity-100" style="width:50px">
<div class="row">
    <div class="col-lg-7 col-md-6 col-sm-12 col-12">
        <div class="card">
            <div class="card-body py-4">
                <dl>
                    <dt><b>Nuestra oficina principal:</b></dt>
                    <dd class="ps-4"><?= $_settings->info('address') ?></dd>
                    <dt><b>Nuestro correo:</b></dt>
                    <dd class="ps-4"><?= $_settings->info('email') ?></dd>
                    <dt><b>Teléfono:</b></dt>
                    <dd class="ps-4"><?= $_settings->info('phone') ?></dd>
                    <dt><b># Móvil:</b></dt>
                    <dd class="ps-4"><?= $_settings->info('mobile') ?></dd>
                </dl>
            </div>
        </div>
    </div>
    <div class="col-lg-5 col-md-6 col-sm-12 col-12">
        <div class="card">
            <div class="card-body py-4">
                <h4 class="pageTitle">Envíanos un mensaje</h4>
                <form action="" id="inquiry-form">
                    <input type="hidden" name="id">
                    <input type="hidden" name="visitor">
                    <div class="mb-3">
                        <label for="fullname" class="form-label">Nombre Completo</label>
                        <input type="text" class="form-control" id="fullname" name="fullname" required="required">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Correo</label>
                        <input type="email" class="form-control" id="email" name="email" required="required">
                    </div>
                    <div class="mb-3">
                        <label for="contact" class="form-label">N° Contacto</label>
                        <input type="text" class="form-control" id="contact" name="contact" required="required">
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Mensaje</label>
                        <textarea rows="5" class="form-control" id="message" name="message" required="required"></textarea>
                    </div>
                </form>
            </div>
            <div class="card-footer">
                <div class="col-lg-4 col-md-6 col-sm-10 col-12 mx-auto">
                    <button class="btn btn-primary btn-sm w-100" form="inquiry-form"><i class="bi bi-send"></i> Enviar</button>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('#inquiry-form').submit(function(e) {
            e.preventDefault();
            var _this = $(this)
            $('.err-msg').remove();
            setTimeout(() => {
                start_loader();
                $.ajax({
                    url: _base_url_ + "classes/Master.php?f=save_inquiry",
                    data: new FormData($(this)[0]),
                    cache: false,
                    contentType: false,
                    processData: false,
                    method: 'POST',
                    type: 'POST',
                    dataType: 'json',
                    error: err => {
                        console.log(err)
                        alert_toast("An error occured", 'error');
                        end_loader();
                    },
                    success: function(resp) {
                        if (typeof resp == 'object' && resp.status == 'success') {
                            location.replace('./?page=contact')
                        } else if (resp.status == 'failed' && !!resp.msg) {
                            var el = $('<div>')
                            el.addClass("alert alert-danger err-msg").text(resp.msg)
                            _this.prepend(el)
                            el.show('slow')
                            $("html, body").scrollTop(0);
                            end_loader()
                        } else {
                            alert_toast("Ocurrió un error", 'error');
                            end_loader();
                            console.log(resp)
                        }
                    }
                })
            }, 200);

        })

    })
</script>