define([
    'jquery',
    'uiComponent',
    'ko',
    'underscore'
], function (
    $,
    Component,
    ko,
    _
) {
    'use strict';
    var staff_list = [{
        'value': '0',
        'name': 'Thong PD',
        'age': '35',
        'job': 'developer'
    },
    {
        'value': '1',
        'name': 'Hieu NV',
        'age': '31',
        'job': 'developer'
    },
    {
        'value': '2',
        'name': 'Cuong TM',
        'age': '28',
        'job': 'developer'
    }];
    if (!localStorage.getItem('dropdown')) {
        localStorage.setItem('dropdown', JSON.stringify(staff_list));
    }

    return Component.extend({
        staffs: ko.observableArray([]),
        selectedItem: ko.observable(),
        input_name: ko.observable(),
        input_age: ko.observable(),
        input_job: ko.observable(),

        /**
         * Init component
         */
        initialize: function () {
            this._super();
            this.dropdown();
            return this;
        },
        showForm: function () {
            $('#form').show();
        },
        saveForm: function () {
            var self = this;
            let staff = { name: self.input_name(), age: self.input_age(), job: self.input_job() };
            let staff_list = JSON.parse(localStorage.getItem("dropdown") || "[]");
            staff_list.push(staff);
            localStorage.setItem('dropdown', JSON.stringify(staff_list));
            this.dropdown();
        },
        dropdown: function () {
            var self = this;
            self.staffs.removeAll();
            let dropdown = JSON.parse(localStorage.getItem("dropdown") || "[]");
            _.each(dropdown, function (dropdownValue, key) {
                var value = dropdownValue.value;

                var name = dropdownValue.name;
                var option = {
                    'value': value,
                    'label': name,
                };
                self.staffs.push(option);
            });
            self.selectedItem.subscribe(function (value) {
                if (value) {
                    let staff = dropdown.filter(x => x.value == value);
                    $('#show').html(staff[0].name + ', ' + staff[0].age + ' tuoi, nghe nghiep ' + staff[0].job);
                } else {
                    $('#show').html('&nbsp;');
                }
            });
        }
    });
});
