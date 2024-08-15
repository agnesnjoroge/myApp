<x-layout>
    <x-slot:title>
        Edit Items Form
    </x-slot>
    <h2>Edit an Item</h2>
<div>
<form method="post" action="{{route('items.update',$item)}}">
  @csrf
  @method('put')
  <div>
      <label>Name</label>
      <input type="text" name="name" placeholder="Enter name of Item" value="{{$item->name}}"/>
  </div>
  <div>
      <label>Brand</label>
      <input type="text" name="brand" placeholder="Enter the brand" value="{{$item->brand}}"/>
  </div>
  <div>
  <label>Price</label>
  <input type="text" name="price" placeholder="Enter price of Item" value="{{$item->price}}"/>
  </div>

<div>
    <input type="submit" value="Update Item" />
</div>
</form>
</div>
</x-layout>