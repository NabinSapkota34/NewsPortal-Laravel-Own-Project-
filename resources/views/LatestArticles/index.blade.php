
@extends('Backend.layouts.main')
@section('main-container')


<table id="myTable" class="table table-striped">
                                        <thead>
                                            <th>Sl No.</th>
                                            <th>Main Caption</th>
                                            <th>Span</th>
                                            <th>Date</th>
                                            <th>Second Caption</th>
                                            <th>Author Name</th>
                                            <th>Main Image</th>
                                            <th>Author Image</th>
                                        </thead>
                                        <tbody>
                                            @forelse ($images as $image)
                                                <tr>
                                                    <td>{{ $loop->index + 1 }}</td>
                                                    <td>{{ $image->main }}</td>
                                                    <td>{{ $image->span }}</td>
                                                    <td>{{ $image->date }}</td>
                                                    <td>{{ $image->main2 }}</td>
                                                    <td>{{ $image->author }}</td>
                                                    <td><img src="{{ url('/images/recentnews/' . $image->image) }}" alt="image"
                                                            width="250" height="250"></td>
                                                            <td><img src="{{ url('/images/recentnews/' . $image->image2) }}" alt="image"
                                                            width="250" height="250"></td>
                                                            <td>                   

                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>

@endsection
