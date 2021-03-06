@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                @include('errors.message')
                @if(Auth::check() && (Auth::user()->id == $project->user_id))
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4>Modifier projet</h4>
                        </div>

                        <div class="panel-body">
                            {!! Form::model($project,
                            array(
                            'route' => array('project.update', $project->id),
                            'method' => 'PUT'
                            )) !!}

                            <div class="form-group">
                                {!! Form::label('project_name', 'Nom du projet') !!}
                                {!! Form::text('project_name', old('project_name'), [
                                    'class' => 'form-control',
                                    'placeholder' => 'Laroche Traiteur',
                                    'required'
                                    ])
                                !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('customer_infos', 'Informations à propos du client') !!}
                                {!! Form::text('customer_infos', old('customer_infos'), [
                                    'class' => 'form-control',
                                    'placeholder' => 'Jean-Michel Laroche, Proprietaire',
                                    'required'
                                    ])
                                !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('customer_address', 'Adresse du client') !!}
                                {!! Form::text('customer_address', old('customer_address'), [
                                    'class' => 'form-control',
                                    'placeholder' => '12 rue victor hugo 75018 Paris',
                                    'required'
                                    ])
                                !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('customer_email', 'Adresse email du client') !!}
                                {!! Form::email('customer_email', old('customer_email'), [
                                    'class' => 'form-control',
                                    'placeholder' => 'jmlaroche75@wanadoo.fr',
                                    'required'
                                    ])
                                !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('customer_numberphone', 'Numéro de téléphone du client') !!}
                                {!! Form::text('customer_numberphone', old('customer_numberphone'), [
                                    'class' => 'form-control',
                                    'placeholder' => '06.42.13.37.69',
                                    'required'
                                    ])
                                !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('contact_infos', 'Informations à propos du contact') !!}
                                {!! Form::text('contact_infos', old('contact_infos'), [
                                    'class' => 'form-control',
                                    'placeholder' => 'Jean-Michel Laroche, Proprietaire',
                                    'required'
                                    ])
                                !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('contact_address', 'Adresse du contact') !!}
                                {!! Form::text('contact_address', old('contact_address'), [
                                    'class' => 'form-control',
                                    'placeholder' => '12 rue victor hugo 75018 Paris',
                                    'required'
                                    ])
                                !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('contact_email', 'Adresse email du contact') !!}
                                {!! Form::email('contact_email', old('contact_email'), [
                                    'class' => 'form-control',
                                    'placeholder' => 'jmlaroche75@wanadoo.fr',
                                    'required'
                                    ])
                                !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('contact_numberphone', 'Numéro de téléphone du contact') !!}
                                {!! Form::text('contact_numberphone', old('contact_numberphone'), [
                                    'class' => 'form-control',
                                    'placeholder' => '06.42.13.37.69',
                                    'required'
                                    ])
                                !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('identity_sheet', "Fiche d'identité") !!}
                                {!! Form::textarea('identity_sheet', old('identity_sheet'), [
                                    'class' => 'form-control',
                                    'placeholder' => "Propriétaire - Cuisinier : Jean-Michel Laroche : 57 Ans [...]",
                                    'required'
                                    ])
                                !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('project_type', 'Type de projet') !!}
                                <div class="col-md-offset-1">
                                    {!! Form::radio('project_type', 'Site-web') !!}
                                    Site internet
                                    <br>
                                    {!! Form::radio('project_type', '3D') !!}
                                    3D
                                    <br>
                                    {!! Form::radio('project_type', 'Animation-2D') !!}
                                    Animation 2D
                                    <br>
                                    {!! Form::radio('project_type', 'Installation') !!}
                                    Installation multimédia
                                    <br>
                                    {!! Form::radio('project_type', 'Jeu-video') !!}
                                    Jeu vidéo
                                    <br>
                                    {!! Form::radio('project_type', 'Dvd') !!}
                                    DVD
                                    <br>
                                    {!! Form::radio('project_type', 'Print') !!}
                                    Print
                                    <br>
                                    {!! Form::radio('project_type', 'Cd-rom') !!}
                                    CD-ROM
                                    <br>
                                    {!! Form::radio('project_type', 'Evenement') !!}
                                    Événement
                                    <br>
                                    {!! Form::radio('project_type', 'autre') !!}
                                    Autre
                                </div>
                            </div>

                            <div class="form-group">
                                {!! Form::label('context', "Contexte du projet") !!}
                                {!! Form::textarea('context', old('context'), [
                                    'class' => 'form-control',
                                    'placeholder' => "Perte d'un gros client et recherche de nouveaux clients récurrents",
                                    'required'
                                    ])
                                !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('request', "Demandes") !!}
                                {!! Form::textarea('request', old('request'), [
                                    'class' => 'form-control',
                                    'placeholder' => "Je voudrais un site pour développer le traiteur auprès de société de moyennes ou grosses importances afin d'avoir la possibilité de prestations récurrentes à l'année. [...]",
                                    'required'
                                    ])
                                !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('goals', "Objectifs") !!}
                                {!! Form::textarea('goals', old('goals'), [
                                    'class' => 'form-control',
                                    'placeholder' => 'Un site attractif pour attirer de nouveaux clients récurrents, des entreprises de préférence. [...]',
                                    'required'
                                    ])
                                !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('constraints', "Contraintes") !!}
                                {!! Form::textarea('constraints', old('constraints'), [
                                    'class' => 'form-control',
                                    'placeholder' => 'Je n’ai pas les accès au site actuel. [...]',
                                    'required'
                                    ])
                                !!}
                            </div>

                            <div class="text-center">
                                {!! Form::submit('Enregistrer modifications',
                                    ['class' => 'btn btn-primary'])
                                !!}
                            </div>

                            {!! Form::close() !!}

                            <a href="{{ route('project.show', $project->id) }}">Retour sur la page du projet</a>
                        </div>
                    </div>
                @else
                    <div class="alert-danger alert">
                        <div class="text-center">
                            <p>Ce n'est pas votre projet</p>
                        </div>
                        <a href="{{ route('profile.show', Auth::user()->id) }}">Retourner sur mon profil</a>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection