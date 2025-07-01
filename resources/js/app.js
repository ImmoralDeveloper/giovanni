import Alpine from 'alpinejs';

window.contactForm = () => {
    return {
        loading: false,
        successMessage: null,
        errorMessage: null,
        errors: {},

        async submit() {
            this.loading = true;
            this.successMessage = null;
            this.errorMessage = null;
            this.errors = {};

            try {
                const response = await fetch(this.$refs.form.action, {
                    method: 'POST',
                    body: new FormData(this.$refs.form),
                    headers: {
                        'Accept': 'application/json',
                    }
                });

                const data = await response.json();

                if (!response.ok) throw data;

                this.successMessage = 'Message sent successfully!';
                this.$refs.form.reset();
                setTimeout(() => {
                    this.successMessage = "";
                }, 3000);

            } catch (error) {
                this.errorMessage = this.parseError(error);
                setTimeout(() => {
                    this.errorMessage = "";
                }, 2500);
            } finally {
                this.loading = false;
            }
        },

        parseError(error) {
            if (error.errors) {
                // Asigna errores a campos específicos
                this.errors = Object.entries(error.errors).reduce((acc, [key, messages]) => {
                    acc[key] = messages.join(', ');
                    return acc;
                }, {});
                console.log(this.errors);

                return 'Please check the form for errors';
            }
            return error.message || 'Error sending message. Please try again.';
        }
    };
};

// Inicializa Alpine.js
window.Alpine = Alpine;
Alpine.start();

const hamburger = document.querySelector('#hamburger');
const scrollBtns = document.querySelectorAll('[data-scroll]');


hamburger.addEventListener('click', () => {
    document.querySelector('.header-nav').classList.toggle('active-menu');
});
scrollBtns.forEach(btn => {
    btn.addEventListener('click', e => {
        if (e.target.dataset.scroll) {
            const section = document.getElementById(e.target.dataset.scroll);
            section.scrollIntoView({ behavior: 'smooth' });
            document.querySelector('.header-nav').classList.remove('active-menu');
        }
    });
});

const servicesButtons = document.querySelectorAll('.service-btn');
servicesButtons.forEach(btn => {
    btn.addEventListener('click', () => {
        const form = document.querySelector('#contact');
        form.scrollIntoView({ behavior: 'smooth' });
        form.querySelector('#service').value = btn.dataset.service;
    });
});