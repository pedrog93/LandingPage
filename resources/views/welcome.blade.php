<!doctype html>
<html>
    <head>
      <title>Laravel</title>
      <link rel="stylesheet" type="text/css" href="{{ url('css/app.css') }}">
    </head>
    <body>
      <form id="contact_form"  v-on:submit.prevent="submitForm" action="">
          <div class="form-group">
              <label for="name">Nombre:</label>
              <!-- v-model link to the model (i.e. pieces of the data section of vue.js) -->
              <!-- v-on lets us run methods from vue.js : this one is v-on:blur for the blur event -->
              <!--    blur just means that the field no longer has 'focus' -->
              <input v-model="name" v-on:blur="isValidName" class="form-control" name="name" type="text" />
          </div>
          <div class="form-group">
              <label for="cellPhone">Celular(10 Digitos)</label>
              <input v-model="cellPhone" v-on:blur="isValidCellPhone" class="form-control" name="cellPhone" type="cellPhone" />
          </div>
          <div class="form-group">
              <label for="email">Correo Electronico</label>
              <input v-model="email" v-on:blur="isValidEmail" class="form-control" name="email" type="email" />
          </div>
          <div class="form-group">
              <label for="company">Empresa (Opcional)</label>
              <input v-model="company" v-on:blur="isValidCompany" class="form-control" name="company" type="company" placeholder="Nombre de la Empresa o Negocio"/>
          </div>
          <div class="form-group">
              <label for="companyType">Tipo de Empresa(opcional)</label>
              <!-- <input v-model="companyType" v-on:blur="isValidCompanyType" class="form-control" name="companyType" type="companyType" /> -->
              <select v-model="companyType" v-on:blur="isValidCompanyType" class="form-control" name="companyType">
                <option selected="selected" disabled value="">Please select one</option>
                <option>A</option>
                <option>B</option>
                <option>C</option>
              </select>
          </div>
          <div class="form-group">
              <label for="subject">Asunto</label>
              <input v-model="subject" v-on:blur="isValidSubject" class="form-control" name="subject" type="subject" />
          </div>
          <div class="form-group">
                <label for="message"> Dudas,Comentarios o reporte <small></label>
              <textarea v-model="message" v-on:blur="isValidMessage" class="form-control" name="message"></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Send</button>
    </form>
        <script src="{{elixir('js/main.js') }}"></script>
    </body>
</html>
