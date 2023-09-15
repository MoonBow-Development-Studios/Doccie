<template>
    <session_layout page="register">
        <register-form />
    </session_layout>
</template>

<script>
import registerForm from "../../components/forms/registerForm.vue";
import session_layout from "../../layouts/session.vue";

export default {
    components: {
        session_layout,
        registerForm
    }
}
</script>
