<div class="modal fade" id="edit{{ $blog->id_blog }}">
    <div class="modal-dialog modal-lg">

        <form method="POST" action="{{ route('admin.blogs.update', $blog->id_blog) }}">
            @csrf
            @method('PUT')

            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title">Editar Blog</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">

                    <div class="row">

                        <div class="col-md-6">

                            <label>Título</label>
                            <input type="text" name="title"
                                value="{{ $blog->title }}"
                                class="form-control mb-2">

                            <label>Resumen</label>
                            <textarea name="excerpt" class="form-control mb-2">
                                {{ $blog->excerpt }}
                            </textarea>

                            <label>Categoría</label>
                            <select name="category_id" class="form-control mb-2">
                                @foreach($categories as $cat)
                                <option value="{{ $cat->id_blogs_categories }}"
                                    {{ $blog->category_id == $cat->id_blogs_categories ? 'selected' : '' }}>
                                    {{ $cat->name }}
                                </option>
                                @endforeach
                            </select>

                            <label>Estado</label>
                            <select name="status" class="form-control mb-2">
                                <option value="1" {{ $blog->status ? 'selected' : '' }}>Activo</option>
                                <option value="0" {{ !$blog->status ? 'selected' : '' }}>Inactivo</option>
                            </select>

                        </div>

                        <div class="col-md-6">

                            <label>Tags</label>
                            <select name="tags[]" class="form-control mb-2" multiple>
                                @foreach($tags as $tag)
                                <option value="{{ $tag->id_blogs_tags }}"
                                    {{ $blog->tags->contains($tag->id_blogs_tags) ? 'selected' : '' }}>
                                    {{ $tag->name }}
                                </option>
                                @endforeach
                            </select>

                        </div>

                        <div class="col-md-12 mt-3">
                            <label>Contenido</label>
                            <textarea name="content" id="editorEdit{{ $blog->id_blog }}" class="form-control">
                                {{ $blog->content }}
                            </textarea>
                        </div>

                    </div>

                </div>

                <div class="modal-footer">
                    <button class="btn btn-warning">
                        <i class="fa fa-edit"></i> Actualizar
                    </button>
                </div>

            </div>

        </form>

    </div>
</div>