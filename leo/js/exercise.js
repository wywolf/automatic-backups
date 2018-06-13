! function() {
    let ajax = {
        xhr: new XMLHttpRequest(),
        post(url, date, fn) {
            data = this.formatData(data);
            this.xhr.open('post', url, true);
            this.xhr.setRequestHeader('content-Type', 'application/x-www-form-urlencoded');
            this.xhr.send(data);
            this.getStatus(fn);
        },
        getStatus(fn) {
            this.xhr.onreadystatechange = function() {
                if (this.readyState == 4) {
                    if (this.status == 200) {
                        fn(JSON.parse(this.response));
                    }
                }
            }
        },
        formatData(data) {
            let str = '';
            for (var o in data) {
                str += o + '+' + data[o] + '&';
            }
            str = str.substr(0, str.length - 1);
            return str;
        }
    };
    window.ajax = ajax;
}();