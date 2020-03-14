<template>
    <div class="nav-box">
        <ul
            v-for="item in nav"
            :key="item.id"
            class="nav"
            @mouseenter="hover= item.title " @mouseleave="hover=''"
        >
            <li>{{ item.title }}
                <ul
                    v-bind:class="[hover === item.title ? subClass : subNoneClass]"
                >
                    <li
                        v-for="sub in item.sub"
                        :key="sub.id"
                    >
                        {{ sub.title }}
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</template>

<script>
export default {
    mounted() {
        console.log(this.nav)
    },
    data: () => ({
        hover: '',
        subClass: 'sub',
        subNoneClass: 'sub-none',
        nav:[
            {title: '關於培茲'},
            {
                title: '最新消息',
                sub:
                [
                    {
                        title: '新品上市',
                        icon: '1234',
                    },
                    {title: '優惠活動'}
                ]
            },
            {title: '銷售排行'},
            {
                title: '狗狗專區',
                sub:
                [
                    {title: '乾糧專區'},
                    {title: '罐頭專區'},
                    {title: '生食專區'},
                    {title: '營養保健'},
                    {title: '零嘴專區'},
                    {title: '寶貝服飾'},
                    {title: '其他用品'},
                ]
            },
            {
                title: '貓咪專區',
                sub:
                [
                    {title: '乾糧專區'},
                    {title: '罐頭專區'},
                    {title: '生食專區'},
                    {title: '營養保健'},
                    {title: '零嘴專區'},
                    {title: '寶貝服飾'},
                    {title: '其他用品'},
                ]
            },
            {
                title: '鼠兔專區',
                sub:
                [
                    {title: '兔兒飼料'},
                    {title: '小鼠飼料'},
                    {title: '鼠兔零食'},
                    {title: '其他用品'},
                ]
            },
            {title: '毛孩知識'},
            {title: '認養連結'}
        ]
    })
}
</script>