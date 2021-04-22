<div class="form-group">
    <label>Title <i class="text-danger">*</i></label>
    <input class="form-control" name="title" placeholder="Song Title" value="{{isset($model) ? $model->title : ''}}" required/>
 
</div>

<div class="form-group">
    <label>Author<i class="text-danger">*</i> </label>
    <input class="form-control" placeholder="Author" name="author" value="{{isset($model) ? $model->author : ''}}" required>
</div>

<div class="form-group">
    <label>Text area <i class="text-danger">*</i></label>
    <textarea class="form-control" rows="15" name="lyrics">
       {{isset($model) ? $model->lyrics : ''}}"
    </textarea>
</div>