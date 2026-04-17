<div class="modal fade" id="modalCreate">
    <div class="modal-dialog modal-lg">

        <form method="POST" action="{{ route('admin.blogs.store') }}">
            @csrf

            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title">Nuevo Blog</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">

                    <div class="row">

                        <div class="col-md-6">

                            <label>Título</label>
                            <input type="text" name="title" class="form-control mb-2" required>

                            <label>Resumen</label>
                            <textarea name="excerpt" class="form-control mb-2" required></textarea>

                            <label>Categoría</label>
                            <select name="category_id" class="form-control mb-2">
                                @foreach($categories as $cat)
                                <option value="{{ $cat->id_blogs_categories }}">
                                    {{ $cat->name }}
                                </option>
                                @endforeach
                            </select>

                        </div>

                        <div class="col-md-6">

                            <label>Tags</label>
                            <select name="tags[]" class="form-control mb-2" multiple>
                                @foreach($tags as $tag)
                                <option value="{{ $tag->id_blogs_tags }}">
                                    {{ $tag->name }}
                                </option>
                                @endforeach
                            </select>

                        </div>

                        <div class="col-md-12 mt-3">
                            <label>Contenido</label>
                            <textarea name="content" id="editorCreate" class="form-control"></textarea>
                        </div>

                    </div>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-dark" data-bs-dismiss="modal">
                        <i class="fa fa-times"></i> Cerrar
                    </button>

                    <button type="submit" class="btn btn-success">
                        <i class="fa fa-check"></i> Guardar
                    </button>
                </div>
            </div>

        </form>

    </div>
</div>