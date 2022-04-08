@extends('layout.master')
@section('content')
    <a href="{{ route('blog.create') }}">
        Thêm
    </a>
    <div class="card">

        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Created At</th>
                    <th>Actions</th>
                </tr>
                @foreach ($data as $each)
            </thead>
            <tbody class="table-border-bottom-0">
                <tr>
                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong> {{ $each->id }}
                        </strong></td>
                    <td>
                        {{ $each->title }}
                    </td>
                    <td>
                        {{ $each->created_at }}
                    </td>
                    <td>
                        <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu" style="">
                                <a class="dropdown-item" href="{{ route('blog.edit', $each) }}"><i
                                        class="bx bx-edit-alt me-1"></i>
                                    Edit</a>
                                <form class="dropdown-item" action="{{ route('blog.destroy', $each) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <i class="bx bx-trash me-1"></i>
                                    <button style="border-radius: 0;padding: 0;
                                        border: none; background-color: ;">Delete</button>
                                </form>

                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
            @endforeach
        </table>
    </div>
@endsection
