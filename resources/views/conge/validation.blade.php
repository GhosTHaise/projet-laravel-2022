@extends('layouts.wrapper')
@Section('main-content')
<div class="container">
    <div class="row">
        <div class="col-md-10 mx-auto">
            <div class="card-body">
                <table id="myTable" class="table table-bordered table-stripped">
                    
                    <thead>
                        <tr>
                            <th>id Conger</th>
                            <th>NOM</th>
                            <th>PRENOM</th>
                            <th>EMAIL</th>
                            <th>MOTIF</th>
                            <th>DEPART</th>
                            <th>ARRIVE</th>
                            <th>VALIDER</th>
                            <th>REFFUSER</th>
                        </tr>
                    </thead>
                    </tbody>

                        @foreach($conge as $item)
                        
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->Nom}}</td>
                                <td>{{$item->Prenom}}</td>
                                <td>{{$item->Email}}</td>
                                <td>{{(strlen($item->Motif)) > 20 ? substr($item->Motif,0,20)."..." : $item->Motif}}</td>
                                <td>{{$item->Depart}}</td>
                                <td>{{$item->Arrive}}</td>
                                <td>
                                    <form action={{Route("conge.validation.confirmer",$item->id)}} method="post">
                                        @csrf
                                        <button type="submit"class="btn btn-primary btn-sm">VALIDER</button>
                                    </form>
                                </td>
                                <td>
                                    <form action={{Route("conge.validation.refuser",$item->id)}} method="post">
                                        @csrf
                                        <button type="submit" class="btn btn-danger btn-sm">REFFUSER</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endSection