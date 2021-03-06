import Vue from 'vue';
// TODO make info an IIFE
// TODO make into Vue.component
new Vue({
    el: '#contact_form', // id of the 'app'
    data: {
        name: '',   // data for the name on the form
        cellPhone: '' //data cellPhone
        email:'',   // data for the email on the form
        company:'', // data for company
        companyType: '', // data for companyType
        subject:'', //data for subject
        message:'', // data for the message on the form
        maxLength: 140 // maximum length of the form message
    },
    methods: { // all the actions our app can do
        isValidName: function () { // TODO what if name is just spaces?
            var valid = this.name.length > 0;
            console.log('checking for a valid name: ' + valid);
            return valid;
        },
        isValidEmail: function () { // TODO is a@b a valid email?
            var valid = (this.email.indexOf('@') > 0 && this.email.length > 0);
            console.log('checking for a valid email: ' + valid);
            return valid;
        },
        isValidMessage: function () { // what is message is just spaces?
            var valid = (this.message.length > 0) &&
                (this.message.length < this.maxLength);
            console.log('checking for a valid message: ' + valid);
            return valid;
        },
        checkMessage: function () {
            // TODO keep the message below maxMessageLength?
            //      or maybe change the text, background, or counter color?
        },
        submitForm: function () {
            // TODO prevent form from submitting if name, email, or message
            //      are invalid and display message
            // TODO submit to form processor
            console.log('submitting message...');
            this.$http({url: '127.0.0.1:8000/submit', method: 'POST', data: {
              //Agregar todos los campos
                name: this.name,
                cellPhone: this.cellPhone,
                email: this.email,
                company: this.company,
                companyType: this.companyType,
                subject: this.subject,
                message: this.message
            }}).then(function () {
                alert('Your form was submitted!');
            }, function () {
                alert('Form submission failed');
            });
        }
    }
});
