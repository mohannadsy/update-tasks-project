<template>
    <Head title="Dashboard" />

    <BreezeAuthenticatedLayout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                Create
            </h2>
        </template>
    <div>
    <form method="post" @submit.prevent="submit">
        <div>
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
        <button class="btn-success">إنشاء</button>
    </form>
    </div>
    </BreezeAuthenticatedLayout>
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

</style>
