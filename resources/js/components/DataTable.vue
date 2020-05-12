<template>
    <div class="col-md-12">
        <div class="table-data__tool">
            <div class="table-data__tool-left">
                <div class="rs-select2--light rs-select2--md">
                    <select class="js-select2" name="property">
                        <option selected="selected">All Properties</option>
                        <option value="">Option 1</option>
                        <option value="">Option 2</option>
                    </select>
                    <div class="dropDownSelect2"></div>
                </div>

                <div class="rs-select2--light rs-select2--sm">
                    <select class="js-select2" name="time">
                        <option selected="selected">Today</option>
                        <option value="">3 Days</option>
                        <option value="">1 Week</option>
                    </select>
                    <div class="dropDownSelect2"></div>
                </div>

                <button class="au-btn-filter">
                    <i class="zmdi zmdi-filter-list"></i>filters
                </button>
            </div>

            <div class="table-data__tool-right">
                <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                    <i class="zmdi zmdi-plus"></i>add item
                </button>

                <div class="rs-select2--dark rs-select2--sm rs-select2--dark2">
                    <select class="js-select2" name="type">
                        <option selected="selected">Export</option>
                        <option value="">Option 1</option>
                        <option value="">Option 2</option>
                    </select>
                    <div class="dropDownSelect2"></div>
                </div>
            </div>
        </div>

        <div class="table-responsive table-responsive-data2">
            <table class="table table-data2">
                <thead>
                    <tr>
                        <th v-for="heading in this.headings" :key="heading.index">{{ heading }}</th>
                    </tr>
                </thead>

                <tbody>
                    <slot name="body"></slot>
                    <!-- <tr class="tr-shadow">
                        <td>1</td>

                        <td>
                            <span>{{ admins[0].last_name }}</span>
                        </td>

                        <td>{{ admins[0].first_name }}</td>

                        <td>{{ admins[0].email }}</td>

                        <td>
                            {{ admins[0].role  }}
                        </td>

                        <td>{{ admins[0].email_verified_at }}</td>

                        <td>
                            <div class="table-data-feature">
                                <button class="item" data-toggle="tooltip" data-placement="top" title="Send">
                                    <i class="zmdi zmdi-mail-send"></i>
                                </button>

                                <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                    <i class="zmdi zmdi-edit"></i>
                                </button>

                                <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                    <i class="zmdi zmdi-delete"></i>
                                </button>
                            </div>
                        </td>
                    </tr>

                    <tr class="spacer"></tr> -->
                </tbody>
            </table>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },

        props: {
            headings: Array,
        },

        data() {
            return {
                admins: [
                    {
                        last_name: 'Dela Rama',
                        first_name: 'Michael Geofrey',
                        email: 'admin@devadmin.com',
                        role: 'Superadmin',
                        email_verified_at: 'Today',
                    }
                ],
            }
        }
    }
</script>
