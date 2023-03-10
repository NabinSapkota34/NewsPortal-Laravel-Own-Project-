
@extends('Backend.layouts.main')
@section('main-container')


<table id="myTable" class="table table-striped">
                                        <thead>
                                            <th>Sl No.</th>
                                            <th>Caption</th>
                                            <th>Image</th>
                                            <th>Span</th>
                                            <th>Date</th>
                                        </thead>
                                        <tbody>
                                            @forelse ($images as $image)
                                                <tr>
                                                    <td>{{ $loop->index + 1 }}</td>
                                                    <td>{{ $image->caption }}</td>
                                                    <td>{{ $image->span }}</td>
                                                    <td>{{ $image->date }}</td>
                                                    <td><img src="{{ url('/images/recentnews/' . $image->image) }}" alt="image"
                                                            width="250" height="250"></td>
                                                            <td>
                                                           <a href="{{ route('recentnews.edit', ['id' => $image->id]) }}" class="btn btn-secondary ">Edit Image</a>

                                                <a href="/delete/{{$image->id}}" class="btn btn-danger delete">Delete</a>
                                                         

                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>

@endsection
