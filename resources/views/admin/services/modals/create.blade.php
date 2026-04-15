<div class="modal fade" id="modalCreate">
    <div class="modal-dialog modal-xl">

        <form method="POST" action="{{ route('admin.servicios.store') }}">
            @csrf

            <div class="modal-content">

                <div class="modal-header">
                    <h5>Nuevo Servicio</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">

                    <!-- TABS -->
                    <ul class="nav nav-tabs nav-line nav-color-secondary">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="pill" href="#tab-general">General</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="pill" href="#tab-beneficios">Beneficios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="pill" href="#tab-planes">Planes</a>
                        </li>
                    </ul>

                    <div class="tab-content mt-3">

                        <!-- GENERAL -->
                        <div class="tab-pane fade show active" id="tab-general">

                            <label>Nombre</label>
                            <input type="text" name="nombre" class="form-control mb-2"
                                placeholder="Ingrese nombre del servicio">

                            <label>Descripción</label>
                            <textarea name="descripcion" class="form-control mb-2"
                                placeholder="Ingrese descripción del servicio"></textarea>

                            <label>Contenido</label>
                            <textarea name="content" id="editorCreateService" class="form-control"></textarea>

                        </div>

                        <div class="tab-pane fade" id="tab-beneficios">

                            <div id="beneficios-container">
                                <div class="row mb-2 align-items-center">
                                    <div class="col-md-3">
                                        <label class="small fw-bold">Título</label>
                                        <input type="text" name="beneficios[0][titulo]" class="form-control"
                                            placeholder="Ej: Garantía">
                                    </div>
                                    <div class="col-md-4">
                                        <label class="small fw-bold">Descripción</label>
                                        <input type="text" name="beneficios[0][descripcion]" class="form-control"
                                            placeholder="Ingrese descripción">
                                    </div>
                                    <div class="col-md-4">
                                        <label class="small fw-bold">Icono (FontAwesome)</label>
                                        <input type="text" name="beneficios[0][icono]" class="form-control"
                                            placeholder="fa fa-check">
                                    </div>
                                    <div class="col-md-1 text-end">
                                        <div style="width: 32px; height: 32px; display: inline-block;"></div>
                                    </div>
                                </div>
                            </div>

                            <hr>

                            <button type="button" class="btn btn-primary btn-border btn-round btn-sm"
                                onclick="addBeneficio()">
                                <i class="fa fa-plus"></i> Agregar Beneficio
                            </button>

                        </div>

                        <div class="tab-pane fade" id="tab-planes">
                            <div id="planes-container">
                                <div class="card p-3 mb-3 border shadow-sm">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <label class="small">Nombre del Plan</label>
                                            <input type="text" name="planes[0][nombre]"
                                                placeholder="Ej: Plan Pro, Membresía Anual..."
                                                class="form-control mb-2">
                                        </div>
                                        <div class="col-md-4">
                                            <label class="small">Precio</label>
                                            <input type="number" step="0.01" name="planes[0][precio]"
                                                class="form-control mb-2" placeholder="0.00">
                                        </div>
                                    </div>

                                    <label class="small">Descripción Corta</label>
                                    <textarea name="planes[0][descripcion]" class="form-control mb-2" rows="2"
                                        placeholder="Resumen del plan..."></textarea>
                                    <div class="bg-light p-2 rounded">
                                        <div id="features-container-0" class="mb-2">
                                            <div class="input-group mb-1">
                                                <input type="text" name="planes[0][features][]"
                                                    class="form-control form-control-sm" placeholder="Ej: Soporte 24/7">
                                                <button class="btn btn-outline-danger btn-sm" type="button"
                                                    onclick="this.closest('.input-group').remove()">×</button>
                                            </div>
                                        </div>

                                        <button type="button" class="btn btn-outline-success btn-xs mt-1"
                                            onclick="addFeature(0)">
                                            <i class="fa fa-plus"></i> Añadir característica
                                        </button>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="planes[0][destacado]"
                                            value="1" id="destacado0">
                                        <label class="form-check-label" for="destacado0">Marcar como Plan
                                            Destacado</label>
                                    </div>
                                </div>
                            </div>

                            <button type="button" class="btn btn-primary btn-border btn-round btn-sm"
                                onclick="addPlan()">
                                <i class="fa fa-plus"></i> Agregar Otro Plan
                            </button>
                        </div>
                    </div>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-dark" data-bs-dismiss="modal">
                        <i class="fa fa-times"></i> Cerrar
                    </button>
                    <button class="btn btn-success"><i class="fa fa-check"></i> Guardar</button>
                </div>

            </div>
        </form>
    </div>
</div>