@extends('layouts/admin')

@section('admin_request')
  <main role="main" class="col-lg-12 px-4 bg-light">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h2 class="content-admin__h2">Заявки от пользователей</h2>
    </div>
    <div class="row">
      <div class="col-12">
        <form action="javascript:void(0)" class="d-none">
          @csrf
        </form>
      </div>
      <div class="content-admin__request__content col-lg-10 mt-sm-3 offset-lg-1 mb-3">
        <span class="content-admin__request__span col-12 text-center d-block"><i class="fas fa-paperclip"></i> Заявка от Simon</span>
        <table class="table">
          <tbody>
          <tr>
            <th scope="row" class="content-admin__request__table__th">Имя</th>
            <td class="content-admin__request__table__td">Simon</td>
          </tr>
          <tr>
            <th scope="row" class="content-admin__request__table__th">Фамилия</th>
            <td class="content-admin__request__table__td">Villiam</td>
          </tr>
          <tr>
            <th scope="row" class="content-admin__request__table__th">Отчество</th>
            <td class="content-admin__request__table__td">Oliver</td>
          </tr>
          <tr>
            <th scope="row" class="content-admin__request__table__th">E-mail</th>
            <td class="content-admin__request__table__td copy-value">simon@icloud.com</td>
          </tr>
          <tr>
            <th scope="row" class="content-admin__request__table__th">Услуга</th>
            <td class="content-admin__request__table__td">Установка системы видеонаблюдения</td>
          </tr>
          <tr>
            <th scope="row" class="content-admin__request__table__th">Техническое задание</th>
            <td class="content-admin__request__table__td">Culpa dolor voluptate do laboris laboris irure reprehenderit id incididunt duis pariatur
              mollit aute
              magna pariatur consectetur. Eu veniam duis non ut dolor deserunt commodo et minim in quis
              laboris ipsum
              velit id veniam. Quis ut consectetur adipisicing officia excepteur non sit. Ut et elit aliquip
              labore
              Lorem enim eu. Ullamco mollit occaecat dolore ipsum id officia mollit qui esse anim eiusmod do
              sint
              minim consectetur qui.
            </td>
          </tr>
          <tr>
            <th scope="row" class="content-admin__request__table__th">Дата подачи</th>
            <td class="content-admin__request__table__td">30.05.2019</td>
          </tr>
          </tbody>
        </table>
      </div>
    </div>
  </main>
@endsection