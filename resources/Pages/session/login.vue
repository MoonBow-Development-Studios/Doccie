<template>
    <session_layout page="login">
        <login-form />
    </session_layout>
</template>

<script>
import loginForm from "../../components/forms/loginForm.vue";
import session_layout from "../../layouts/session.vue";

export default {
    components: {
        session_layout,
        loginForm
    }
}
</script>
