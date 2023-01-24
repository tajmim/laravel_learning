<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
        <h1 class="d-inline">Hi {{ Auth::user()->name }}</h1>
        <b style="float:right; font-size: 20px;">total users : <span class="badge bg-primary">{{count($users)}}</span></b>

    </x-slot>

    

    

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="row">
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">SL</th>
                      <th scope="col">NAME</th>
                      <th scope="col">EMAIL</th>
                      <th scope="col">CREATED AT</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $sl = 1 ?>
                    @foreach($users as $user)
                    <tr>
                    <td>{{ $sl++ }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ Carbon\Carbon::parse($user->created_at)->diffForHumans() }}</td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
