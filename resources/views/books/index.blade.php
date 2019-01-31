@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h1 class="title">Books</h1>
            <div class="level">
                <div class="level-left"></div>
               <div class="level-right">
                   <div class="level-item select">
                       <select name="" id="">
                           <option selected>Available</option>
                           <option>All</option>
                           <option>Recently Added</option>
                       </select>
                   </div>

                   <div class="level-item field has-addons">
                       <p class="control">
                           <button class="button">
                               <span class="icon is-small">
                                   <i class="fas fa-th-large"></i>
                               </span>
                               <span>Grid</span>
                           </button>
                       </p>
                       <p class="control">
                           <button class="button">
                               <span class="icon is-small">
                                   <i class="fas fa-th-list"></i>
                               </span>
                               <span>List</span>
                           </button>
                       </p>
                   </div>
               </div>
            </div>
        </div>
        <div class="row">
            <div class="tile">
                <table class="table is-fullwidth">
                   <tbody>
                       @foreach($books as $book)
                           <tr>
                               <td>
                                   <img src="" alt="">
                               </td>
                               <td>{{ $book->title }}</td>
                               <td>
                                   <button class="button is-primary">Borrow</button>
                               </td>
                           </tr>
                       @endforeach
                   </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
