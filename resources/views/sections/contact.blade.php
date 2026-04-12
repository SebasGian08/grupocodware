<!-- Contact One -->
<section class="contact-one" style="background: #edf7ff; padding:80px 0;">
    <div class="auto-container">

        <!-- Título -->
        <div class="sec-title_three text-center">
            <div class="sec-title_three-title">Contacto</div>
            <h2 class="sec-title_three-heading">
                Te damos la bienvenida a <span>grupocodware.com</span>
            </h2>
        </div>

        <!-- Centrado -->
        <div class="row justify-content-center">
            <div class="col-lg-7 col-md-10">

                <!-- Card Form -->
                <div class="contact-form-card"
                    style="background:#fff; padding:40px; border-radius:16px; box-shadow:0 10px 30px rgba(0,0,0,0.08);">

                    <form method="POST" action="{{ route('contact.store') }}">
                        @csrf
                        <div class="row">
                            <div class="row">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="col-lg-6 form-group mb-3">
                                    <label>Nombres <span style="color:red">*</span></label>
                                    <input type="text" name="nombre" class="form-control"
                                        placeholder="Ingrese Nombres Completos" required>
                                </div>
                                <div class="col-lg-6 form-group mb-3">
                                    <label>Apellidos <span style="color:red">*</span></label>
                                    <input type="text" name="apellidos" class="form-control"
                                        placeholder="Ingrese Apellidos Completos" required>
                                </div>
                                <div class="col-lg-6 form-group mb-3">
                                    <label>Servicio <span style="color:red">*</span></label>
                                    <select name="servicio" class="form-select" required>
                                        <option value="">Seleccione un servicio</option>
                                        @foreach($services as $service)
                                        <option value="{{ $service->id_service }}">
                                            {{ $service->nombre }}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-lg-6 form-group mb-3">
                                    <label>Teléfono <span style="color:red">*</span></label>

                                    <div class="input-group">
                                        <span class="input-group-text">+51</span>

                                        <input type="text" name="telefono" id="telefono" class="form-control"
                                            placeholder="987654321" maxlength="9" required>
                                    </div>
                                </div>
                                <div class="col-lg-12 form-group mb-3">
                                    <label>Email <span style="color:red">*</span></label>
                                    <input type="email" name="email" class="form-control"
                                        placeholder="correo@ejemplo.com" maxlength="120" required>
                                </div>
                                <div class="col-lg-12 form-group mb-3">
                                    <label>Mensaje <span style="color:red">*</span></label>
                                    <textarea name="message" class="form-control" rows="5"
                                        placeholder="Escribe tu mensaje aquí..." required></textarea>
                                </div>
                                <div style="display:none;">
                                    <input type="text" name="website" value="">
                                </div>

                                <div class="g-recaptcha" data-sitekey="{{ env('RECAPTCHA_SITE_KEY') }}"></div>

                                <div class="col-lg-12 text-center mt-3">
                                    <button class="theme-btn btn-style-seven">
                                        <span class="btn-wrap">
                                            <span class="text-one">Enviar</span>
                                            <span class="text-two">Enviar</span>
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Contact One -->
 
