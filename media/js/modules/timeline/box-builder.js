var timelineBoxBuilder = {

    buildTimeline: function (transaction) {
        var isInverted = (transaction.id % 2 == 0) ? '' : 'timeline-inverted';
        return '<li class="' + isInverted + '">' + this.badge(transaction.transaction) + '<div class="timeline-panel">' + this.heading(transaction) + this.body(transaction.reason) + '</div>' + '</li>';
    },

    badge: function (type) {

        return '<div class="timeline-badge ' + this.getBackground(type) + '"><i class="fa fa-' + this.getIcon(type) + '"></i></div>';
    },

    body: function (message) {
        return '<div class="timeline-body pull-left" > <p>' + message + '</p> </div>';
    },

    heading: function (transaction) {

        var heading = '<div class="timeline-heading heading-main"> <h4 class="timeline-title">' + transaction.full_name + ' did <span class="transactionType">' + transaction.transaction + '</span> on </h4>';

        heading += '<span><i class="fa fa-clock-o fa-2x"></i> ' + transaction.transaction_date + '</span> <hr /> </div>';

        var avatar = (transaction.avatar) ? '/uploads/avatar/' + transaction.logged_by + '/' + transaction.avatar : '/media/images/default_avatar.gif';
        var image = '<div class="image-div"> <img src="' + avatar + '" class="pull-right image-avatar"></div>'

        return heading + image;

    },
    getIcon: function (transactionType) {

        switch (transactionType) {
            case 'print':
                return 'print';
            case 'encode':
                return 'keyboard-o';
            case 'others':
                return 'file-text-o';
            case 'all':
                return 'circle-o-notch';
            default:
                return 'code';
        }
    },
    getBackground: function (transactionType) {

        switch (transactionType) {
            case 'print':
                return 'primary';
            case 'encode':
                return 'info';
            case 'others':
                return 'danger';
            case 'all':
                return 'success';
            default:
                return 'code';
        }
    }
}
