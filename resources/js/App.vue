<template>
  <div>
    <h1>hello world</h1>
    <ul>
			<li v-for="post in posts" :key="post.id">
        titolo post {{post.id}}: {{post.title}}
      </li>
		</ul>
  </div>
</template>

<script>
export default {
  name: 'App',
    data() {
			return {
				posts: []
			}
		},
    methods: {
      getPosts() {
        axios.get('/api/posts')
          .then((response) => {
            this.posts = response.data.data;
          })
          .catch( (error) => {
            console.log(error);
          })
      }
    },
		mounted() {
      this.getPosts();
		}
}
</script>


<style lang="scss" scoped>

</style>>

