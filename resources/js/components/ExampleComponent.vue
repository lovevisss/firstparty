<template>
    <div class="container">
        <div class="row justify-content-center">
                Hello World! verfiy {{ name }}
        </div>
    </div>
</template>

<script>
    import { onMounted } from "vue";
    // const props = defineProps(['name']);

 
    onMounted(() => {
        console.log("Component mounted!");
    });

    export default {
        data() {
            return {
                bookmarks: []
            }
        },
    };
    
</script>