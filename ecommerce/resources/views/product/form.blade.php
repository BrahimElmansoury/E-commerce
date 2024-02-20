<form action="{{route('products.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-gorup mb-3">
        <label for="" class="form-label">Name</label>
        <input type="text" name="name" id="" class="form-control" value="{{old('name')}}"/>
    </div>
    <div class="form-gorup mb-3">
        <label for="" class="form-label">Description</label>
        <textarea type="text" name="description" id="" class="form-control">{{old('description')}}</textarea>
    </div>
    <div class="form-gorup mb-3">
        <label for="" class="form-label">Quantity</label>
        <input type="numeric" name="quantity" id="" class="form-control" value="{{old('qunatity')}}"/>
    </div>
    <div class="form-gorup mb-3">
        <label for="" class="form-label">Image</label>
        <input type="file" name="image" id="" class="form-control"/>
    </div>
    <div class="form-gorup mb-3">
        <label for="" class="form-label">Price</label>
        <input type="numeric" name="price" id="" class="form-control" value="{{old('price')}}"/>
    </div>
    <div class="form-gorup mb-3">
        <input type="submit" name="" id="" class="btn btn-primary" value="Ajouter"/>
    </div>
    
</form>