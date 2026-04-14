<section class="contact-one" style="background: #edf7ff; padding: 80px 0;">
    <div class="auto-container" style="max-width: 1250px; margin: 0 auto; padding: 0 20px;">

        <div class="sec-title_three text-center" style="margin-bottom: 50px;">
            <div class="sec-title_three-title"
                style="color: #0dcaf0; font-weight: 700; text-transform: uppercase; letter-spacing: 2px; font-size: 14px; margin-bottom: 10px;">
                Contacto</div>
            <h2 class="sec-title_three-heading" style="font-size: 36px; color: #1a202c; font-weight: 800;">
                Te damos la bienvenida a <span style="color: #0dcaf0;">grupocodware.com</span>
            </h2>
        </div>

        <div class="row g-0"
            style="background: #ffffff; border-radius: 20px; overflow: hidden; box-shadow: 0 20px 40px rgba(0,0,0,0.08);">

            <div class="col-lg-5 col-md-12"
                style="background: #f8fdff; padding: 50px; border-right: 1px solid #e2e8f0;">
                <div style="border-left: 5px solid #0dcaf0; padding-left: 25px; margin-bottom: 30px;">
                    <h3
                        style="font-weight: 800; color: #1a202c; font-size: 28px; line-height: 1.2; margin-bottom: 15px;">
                        ¿Listo para digitalizar tu empresa?
                    </h3>
                    <p style="color: #4a5568; font-size: 16px; line-height: 1.8; margin: 0;">
                        Impulsamos la <strong style="color: #0dcaf0;">transformación digital</strong> con soluciones
                        escalables y soporte técnico especializado.
                    </p>
                </div>

                <ul style="list-style: none; padding: 0; margin: 0;">
                    <li
                        style="display: flex; align-items: center; gap: 15px; color: #2d3748; font-weight: 500; margin-bottom: 20px;">
                        <span
                            style="color: white; background: #0dcaf0; width: 30px; height: 30px; display: flex; align-items: center; justify-content: center; border-radius: 50%; flex-shrink: 0;">
                            <i class="fa-solid fa-check" style="font-size: 12px;"></i>
                        </span>
                        <span>Respuesta en menos de 24 horas</span>
                    </li>
                    <li
                        style="display: flex; align-items: center; gap: 15px; color: #2d3748; font-weight: 500; margin-bottom: 20px;">
                        <span
                            style="color: white; background: #0dcaf0; width: 30px; height: 30px; display: flex; align-items: center; justify-content: center; border-radius: 50%; flex-shrink: 0;">
                            <i class="fa-solid fa-check" style="font-size: 12px;"></i>
                        </span>
                        <span>Asesoría técnica especializada</span>
                    </li>
                    <li style="display: flex; align-items: center; gap: 15px; color: #2d3748; font-weight: 500;">
                        <span
                            style="color: white; background: #0dcaf0; width: 30px; height: 30px; display: flex; align-items: center; justify-content: center; border-radius: 50%; flex-shrink: 0;">
                            <i class="fa-solid fa-check" style="font-size: 12px;"></i>
                        </span>
                        <span>Cotización sin compromiso</span>
                    </li>
                </ul>
            </div>

            <div class="col-lg-7 col-md-12" style="padding: 50px;">
                <form method="POST" action="{{ route('contact.store') }}">
                    @csrf

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
                            <input type="email" name="email" class="form-control" placeholder="correo@ejemplo.com"
                                maxlength="120" required>
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
                                    <span class="text-one"><i class="fas fa-paper-plane me-2"></i> Enviar</span>
                                    <span class="text-two"><i class="fas fa-paper-plane me-2"></i> Enviar</span>
                                </span>
                            </button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</section>