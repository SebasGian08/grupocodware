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

                    <form method="post" action="contact.html">

                        <div class="row">

                            <div class="row">

                                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                <!-- Nombres -->
                                <div class="col-lg-6 form-group mb-3">
                                    <label>Nombres <span style="color:red">*</span></label>
                                    <input type="text" name="nombre" class="form-control"
                                        placeholder="Ingrese Nombres Completos" required>
                                </div>

                                <!-- Apellidos -->
                                <div class="col-lg-6 form-group mb-3">
                                    <label>Apellidos <span style="color:red">*</span></label>
                                    <input type="text" name="apellidos" class="form-control"
                                        placeholder="Ingrese Apellidos Completos" required>
                                </div>

                                <!-- Servicio -->
                                <div class="col-lg-6 form-group mb-3">
                                    <label>Servicio <span style="color:red">*</span></label>
                                    <select name="servicio" class="form-select" required>
                                        <option value="">Seleccione un servicio</option>
                                        <option value="web">Páginas Web</option>
                                        <option value="sistema">Sistemas a Medida</option>
                                        <option value="facturacion">Sistema de Facturación</option>
                                        <option value="crm">CRM / Gestión Empresarial</option>
                                        <option value="app">Aplicaciones Móviles</option>
                                        <option value="otro">Otro</option>
                                    </select>
                                </div>

                                <!-- Teléfono -->
                                <div class="col-lg-6 form-group mb-3">
                                    <label>Teléfono <span style="color:red">*</span></label>
                                    <input type="text" name="telefono" class="form-control" value="+51 "
                                        placeholder="Número de teléfono" pattern="^\+51\s?[0-9]{9}$" required>
                                </div>

                                <!-- Email (FULL WIDTH) -->
                                <div class="col-lg-12 form-group mb-3">
                                    <label>Email <span style="color:red">*</span></label>
                                    <input type="email" name="email" class="form-control"
                                        placeholder="correo@ejemplo.com" maxlength="120" required>
                                </div>

                                <!-- Mensaje (FULL WIDTH) -->
                                <div class="col-lg-12 form-group mb-3">
                                    <label>Mensaje <span style="color:red">*</span></label>
                                    <textarea name="message" class="form-control" rows="5"
                                        placeholder="Escribe tu mensaje aquí..." required></textarea>
                                </div>

                                <div style="display:none;">
                                    <input type="text" name="website" value="">
                                </div>

                                <!-- Botón -->
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
                <!-- End Card -->
            </div>
        </div>
    </div>
</section>
<!-- End Contact One -->