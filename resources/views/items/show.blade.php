<x-layout>
    <x-slot:title>
        Available Items
    </x-slot>
    <h2>Items in store</h2>
    <table border="1">
      <tr>
           <td>Id</td>
            <td>Name</td>
            <td>brand</td>
            <td>Price</td>
            <td>Edit</td>
            <td>Delete</td>
      @foreach($items as $item)
            <tr>
              <td>{{$item->id}}</td>
              <td>{{$item->name}}</td>
              <td>{{$item->brand}}</td>
              <td>{{$item->price}}</td>
              <td><a href="{{route('items.edit',$item)}}">Edit</a></td>
              <td>
                 <form method="post" action="{{route('items.destroy', $item)}}">
                  @csrf
                  @method('delete')
                  <input type="submit" value="Delete"/>
                </form>
              </td>
            </tr>
            
            @endforeach
          </tr>
        </table>
      </div>
  </x-layout>