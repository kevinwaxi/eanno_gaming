export default {
    data() {
        return {};
    },
    methods: {
        async callApi(method, url, dataObj) {
            try {
                return await axios({
                    method: method,
                    url: url,
                    data: dataObj,
                });
            } catch (e) {
                return e.response;
            }
        },
        s(
            text,
            position = "bottom-right",
            title = "Hey there",
            color = "primary"
        ) {
            this.$vs.notification({
                color,
                position,
                title: title,
                text: text,
            });
        },
        s(text, position = "top-right", title = "Success", color = "success") {
            this.$vs.notification({
                color,
                position,
                title: title,
                text: text,
            });
        },
        w(
            text,
            position = "top-right",
            title = "Oops Sorry!",
            color = "warning"
        ) {
            this.$vs.notification({
                color,
                position,
                title: title,
                text: text,
            });
        },
        e(text, position = "top-center", title = "Error!", color = "danger") {
            this.$vs.notification({
                color,
                position,
                title: title,
                text: text,
            });
        },
        swr(
            text = "Sorry, Something went wrong! Please try later",
            title = "This is unusual !",
            color = "warning",
            position = "top-right"
        ) {
            this.$vs.notification({
                color,
                position,
                title: title,
                text: text,
            });
        },
    },
};
