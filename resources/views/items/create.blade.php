<x-layout>
    <x-slot:title>
        Create Items Form
    </x-slot>
    <h2>Input Items</h2>
<div>
<form method="post" action="{{route('items.store')}}">
  @csrf
  @method('post')
  <div>
      <label>Name</label>
      <input type="text" name="name" placeholder="Enter name of Item" />
  </div>
  <div>
      <label>Brand</label>
      <input type="text" name="brand" placeholder="Enter the brand" />
  </div>
  <div>
  <label>Price</label>
  <input type="text" name="price" placeholder="Enter price of Item" />
  </div>

<div>
    <input type="submit" value="Save a new Item" />
</div>
</form>
</div>
</x-layout>