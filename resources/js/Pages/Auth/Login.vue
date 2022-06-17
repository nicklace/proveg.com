<script setup>
import { Head, Link, useForm } from '@inertiajs/inertia-vue3';
import JetAuthenticationCard from '@/Jetstream/AuthenticationCard.vue';
import JetAuthenticationCardLogo from '@/Jetstream/AuthenticationCardLogo.vue';
import JetButton from '@/Jetstream/Button.vue';
import JetInput from '@/Jetstream/Input.vue';
import JetCheckbox from '@/Jetstream/Checkbox.vue';
import JetLabel from '@/Jetstream/Label.vue';
import JetValidationErrors from '@/Jetstream/ValidationErrors.vue';


defineProps({
    canResetPassword: Boolean,
    status: String,
});

const form = useForm({
    email: '',
    password: '',
    remember: false,
});

const formC = useForm({
    emailu: '',
    firstname: '',
    lastname: '',
    organisation: '',
    message: '',
});

const submit = () => {
    form.transform(data => ({
        ...data,
        remember: form.remember ? 'on' : '',
    })).post(route('login'), {
        onFinish: () => {
            form.reset('password');
            window.location.href = window.location.href;
        }
    });
};

const contact = () => {
    formC.post(route('contact'),{
        onFinish: () => formC.reset('emailu'),
    });
};

</script>



<template>
    <Head title="Log in" />

    <JetAuthenticationCard>
        <template #logo>
            <JetAuthenticationCardLogo />
        </template>

        <JetValidationErrors class="alert alert-danger" />

        <div v-if="status" class="alert alert-success" role="alert">
            {{ status }}
        </div>

        <form @submit.prevent="submit">
            <h3>Login</h3>
            <div class="mb-3">
                <JetLabel for="email" value="Email" />
                <JetInput
                    id="email"
                    v-model="form.email"
                    type="email"
                    class="mt-1 block w-full"
                    required
                    autofocus
                />
            </div>

            <div class="mb-3" >
                <JetLabel for="password" value="Password" />
                <JetInput
                    id="password"
                    v-model="form.password"
                    type="password"
                    class="mt-1 block w-full"
                    required
                    autocomplete="current-password"
                />
            </div>

            <div class="form-check">
                 <JetCheckbox v-model:checked="form.remember" name="remember" id="remember" />
                <label class="form-check-label" for="remember">
                    Remember me
                </label>
            </div>

            <div class="flex items-center justify-start mt-4">
                <JetButton :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                    Login
                </JetButton>
                <Link v-if="canResetPassword" :href="route('password.request')" class="underline text-sm ml-4">
                    Forgot your password?
                </Link>
            </div>
        </form>

        <hr>

        <form @submit.prevent="contact">
            <h3>Contact</h3>
            <div class="mb-3">
                <JetLabel for="firstname" value="Firstname" />
                <JetInput
                    id="firstname"
                    v-model="formC.firstname"
                    type="text"
                    class="mt-1 block w-full"
                    required
                    autofocus
                />
            </div>
            <div class="mb-3">
                <JetLabel for="lastname" value="Lastname" />
                <JetInput
                    id="lastname"
                    v-model="formC.lastname"
                    type="text"
                    class="mt-1 block w-full"
                    required
                    autofocus
                />
            </div>
            <div class="mb-3">
                <JetLabel for="organisation" value="Organisation" />
                <JetInput
                    id="organisation"
                    v-model="formC.organisation"
                    type="text"
                    class="mt-1 block w-full"
                    required
                    autofocus
                />
            </div>
            <div class="mb-3">
                <JetLabel for="emailu" value="Email" />
                <JetInput
                    id="emailu"
                    v-model="formC.emailu"
                    type="email"
                    class="mt-1 block w-full"
                    required
                    autofocus
                />
            </div>
            <div class="mb-3">
                <JetLabel for="message" value="Message" />
                <JetInput
                    id="message"
                    v-model="formC.message"
                    type="text"
                    class="mt-1 block w-full"
                    required
                    autofocus
                />
            </div>

            <div class="flex items-center justify-start mt-4">
                <JetButton :class="{ 'opacity-25': formC.processing }" :disabled="formC.processing">
                    Send
                </JetButton>
            </div>
        </form>

    </JetAuthenticationCard>
</template>
