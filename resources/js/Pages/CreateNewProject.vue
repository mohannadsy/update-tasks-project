<template>
    <div class="container contact-form">
    <form method="post" @submit.prevent="submit">
        <h3>إنشاء مشروع</h3>
        <div class="row">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">اسم المشروع</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="اسم المشروع"
                v-model="form.name">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">الوصف</label>
                <textarea class="form-control"
                id="exampleFormControlTextarea1" rows="3"
                v-model="form.description"
                ></textarea>
            </div>
        </div>
        <button class=" btnContact">إنشاء</button>
    </form>
    </div>
</template>

<script>
import { useForm } from "@inertiajs/inertia-vue3";
export default {
    setup() {
        const form = useForm({
            name: null,
            description: null,
        });

        return { form };
    },
    methods: {
        submit() {
            this.form.post(route("projects.store"));
        },
    },
}
</script>

<style>
*{
    direction: rtl;
}

.container{
    background: -webkit-linear-gradient(left, #0072ff, #00c6ff);
}
.contact-form{
    background: #fff;
    margin-top: 10%;
    margin-bottom: 5%;
    width: 70%;
}

.contact-form .form-control{
    border-radius:1rem;
}

.contact-form form{
    padding: 14%;
}

.contact-form h3{
    margin-bottom: 8%;
    margin-top: -10%;
    text-align: center;
    color: #0062cc;
}
.contact-form .btnContact {
    width: 50%;
    border: none;
    border-radius: 1rem;
    padding: 1.5%;
    background: #dc3545;
    font-weight: 600;
    color: #fff;
    cursor: pointer;
}
</style>
