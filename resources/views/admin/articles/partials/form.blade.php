<div class="container">

    <label for="">Заголовок</label>
    <input type="text" class="form-control" name="title" placeholder="Заголовок новости"
           value="{{$article->title ?? ""}}"
           required>

    <label for="">Slug (Уникальное значение)</label>
    <input class="form-control" type="text" name="slug" placeholder="Автоматическая генерация"
           value="{{$article->slug ?? ""}}" readonly="">

    <label for="">Краткое описание</label>
    <textarea class="form-control" id="description_short"
              name="description_short">{{$article->description_short ?? ""}}</textarea>

    <label for="">Полное описание</label>
    <textarea class="form-control" id="description" name="description">{{$article->description ?? ""}}</textarea>

    <hr/>

    <label for="">Мета заголовок</label>
    <input type="text" class="form-control" name="meta_title" placeholder="Мета заголовок"
           value="{{$article->meta_title ?? ""}}">

    <label for="">Мета описание</label>
    <input type="text" class="form-control" name="meta_description" placeholder="Мета описание"
           value="{{$article->meta_description ?? ""}}">

    <label for="">Ключевые слова</label>
    <input type="text" class="form-control" name="meta_keyword" placeholder="Ключевые слова, через запятую"
           value="{{$article->meta_keyword ?? ""}}">

    <hr/>

    <input class="btn btn-dark" type="submit" value="Сохранить">
</div>
