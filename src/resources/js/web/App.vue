<template>
    <h1>{{ randomMessage }}</h1>
</template>

<script setup lang="ts">
import { ref } from 'vue';

const messages: string[] = [
    "Hello World",
    "こんにちは、世界",
];

const randomMessage = ref<string>('');

const getRandomMessage = () => {
    const randomIndex: number = Math.floor(Math.random() * messages.length);
    randomMessage.value = messages[randomIndex];
};

getRandomMessage(); // 初期化時にランダムなメッセージを取得
</script>