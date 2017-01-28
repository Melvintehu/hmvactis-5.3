@extends('cms.master')



@section('content')
    <h1>Deelnemersoverzicht voor {{ $data['event']->title }} op {{ substr($data['event']->date,0,10) }}</h1>
    <hr>

    <div class="row">
        <div class="col-lg-12"> 
            <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                           <a href="../../events">Ga terug</a>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="table-responsive">
                                            <table class="table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th> # </th>
                                                        <th>Naam</th>
                                                        
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                <?php $i = 1; ?>
                                                    @foreach($data['event']->users as $user)
                                                    <tr>
                                                         <td>{{ $i }}</td>
                                                         <td> {{ $user->name }} </td>
                                                        
                                                        <?php $i++; ?>
                                                    </tr>
                                                    @endForeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- End row -->
               
        </div>
    </div>
@stop
