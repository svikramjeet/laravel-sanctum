<template>
<div>
<a href="" @click.prevent="login" >Login</a>
</div>
</template>

<script>
import axios from 'axios'
export default {
  methods: {
    async login () {
      await  axios.get('http://localhost:8000/sanctum/csrf-cookie')

      await  axios.post('http://localhost:8000/login', {
        email: 'aa@aa.aa',
        password: 'aaa'
      })
      
      let a = await axios.get('http://localhost:8000/api/user',
       {
        headers: {
          'Accept': '*/*'
        }
      }
      )
      console.log(a)
    }
  }
}
</script>
