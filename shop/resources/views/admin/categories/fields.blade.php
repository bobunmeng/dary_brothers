<div class="form-group">
    <label for="name">Category Name</label>
    {!! Form::text('name', null, ['placeholder' => 'Category name','class' => 'form-control']) !!}
    <div class="invalid-feedback">
        Looks good!
    </div>
</div>
<div class="form-group">
    <label for="description">Description</label>
    {!! Form::textarea('description', null, ['placeholder' => 'Category description','class' => 'form-control']) !!}
</div>
<div class="custom-control custom-checkbox mb-3">
    {!! Form::hidden('status','0', false) !!}
    {!! Form::checkbox('status', '1', null,['class' => 'custom-control-input', 'id' => 'status']) !!}
    {!! Form::label('status', 'Status', ['class' => 'custom-control-label']) !!}
</div>
<button type="submit" class="btn btn-primary">Submit</button>
<a href="{!! route('admin.categories.index') !!}" class="btn btn-default">Back</a>