@extends('layouts.forum')
 
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 border border-1 mt-5">
                <h3>Full-Stack Developer</h3>
                <p>
                    Hi, there. I am a web engineer with over ten years of experience in web and cross-platform development. Especially, I have vast experience in business application development. React.Js, React Native, Angular, vue.Js, Storybook, MUI, Antd, Styled Component, Tailwind-css Express.Js, Nest.Js, Django, Laravel, Flask Mysql, MongoDB, PostgreSQL, Oracle Netsuite, ERP, CRM, Suitescript. AWS, GCP, GraphQL, RESTful API Git, Docker, Jira, QA, Scrum, Jest I know the correct way to lead the project to success and love to make a good friendships with the team members. Also, I enjoy solving complex puzzles and working as part of a team to create and launch an e-commerce business solution. This includes implementing the best practices. I am more than 10 years into this career and love the work. I want to talk with you as soon as possible. Regards
                </p>
                <hr>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end mb-3">
                    <button class="btn btn-secondary me-md-2" type="button">Edit</button>
                    <button class="btn btn-danger" type="button">Delete</button>
                </div>
            </div>
        </div>
        <div class="row my-3">
            <div class="col-12">
                <div class="d-grid gap-2 col-3 mx-auto">
                    <button class="btn btn-outline-danger fs-4"><i class="fa-solid fa-heart"></i> 3
                    </button>
                </div> 
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <ul class="list-group">
                    <li class="list-group-item list-group-item-action">A second item</li>
                    <li class="list-group-item list-group-item-action">A third item</li>
                    <li class="list-group-item list-group-item-action">A fourth item</li>
                    <li class="list-group-item list-group-item-action">And a fifth one</li>
                </ul>
            </div>
        </div>
        <hr>
        <div class="row my-3">
            <div class="col-12">
              <input type="text" class="form-control">
            </div>
            <div class="col-12 mt-3">
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button class="btn btn-primary" type="button">Submit</button>
                </div>
            </div>
        </div>
    </div>
@endsection