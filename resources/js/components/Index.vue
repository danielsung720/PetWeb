<template>
    <div>
        <Header />
        <Nav />
    </div>
</template>

<script>
import Header from './Header';
import Nav from './Nav';
import '../css/index.css';

export default {
    components: {
        Header,
        Nav
    }
}
</script>