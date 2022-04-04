<template xmlns="http://www.w3.org/1999/html">
    <div>
        <button class="btn btn-primary m-2" @click="followUser" > Follow</button>
    </div>
</template>

<script>
export default {

    props:['userId', 'follows'],

    mounted() {
        console.log('Component mounted.')
    },
    data: function () {
        return {
            status: this.follows,
        }},
    methods: {
        followUser() {
            axios.post('/follow/' + this.userId)
                .then(response =>{
                //    this.status = !this.status;
                    console.log(response.data);
                });


        }
    }
}
</script>
