<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class StoredEventsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('stored_events')->delete();

        \DB::table('stored_events')->insert(array (
            0 =>
            array (
                'id' => 1,
                'user_uuid' => NULL,
                'team_uuid' => NULL,
                'owner_uuid' => NULL,
                'aggregate_uuid' => '3cf992e8-c041-43ca-beaf-e65564cc4f2d',
                'aggregate_version' => 1,
                'event_version' => 1,
                'event_class' => 'App\\StorableEvents\\UserCreated',
                'event_properties' => '{"userUuid":"3cf992e8-c041-43ca-beaf-e65564cc4f2d","name":"Owner","email":"owner@mailinator.com","password":"$2y$10$HfKi.qdRexjBQwZEZe4Ms.GV.WQ7iuMlunobcIdcxXK\\/cvaH2\\/00a","withPersonalTeam":false,"teamUuid":null,"teamName":null,"teamDatabaseUuid":null}',
                'meta_data' => '{"aggregate-root-uuid":"3cf992e8-c041-43ca-beaf-e65564cc4f2d","created-at":"2022-04-15T15:46:26.152693Z","aggregate-root-version":1,"stored-event-id":1}',
                'created_at' => '2022-04-15 11:46:26',
            ),
            1 =>
            array (
                'id' => 2,
                'user_uuid' => NULL,
                'team_uuid' => NULL,
                'owner_uuid' => NULL,
                'aggregate_uuid' => '3cf992e8-c041-43ca-beaf-e65564cc4f2d',
                'aggregate_version' => 2,
                'event_version' => 1,
                'event_class' => 'App\\StorableEvents\\UserTypeUpdated',
                'event_properties' => '{"userUuid":"3cf992e8-c041-43ca-beaf-e65564cc4f2d","userType":"super_admin"}',
                'meta_data' => '{"aggregate-root-uuid":"3cf992e8-c041-43ca-beaf-e65564cc4f2d","created-at":"2022-04-15T15:46:26.215635Z","aggregate-root-version":2,"stored-event-id":2}',
                'created_at' => '2022-04-15 11:46:26',
            ),
            2 =>
            array (
                'id' => 3,
                'user_uuid' => NULL,
                'team_uuid' => NULL,
                'owner_uuid' => NULL,
                'aggregate_uuid' => '00000000-0000-0000-0000-000000000000',
                'aggregate_version' => 1,
                'event_version' => 1,
                'event_class' => 'App\\StorableEvents\\TeamDatabaseCreated',
                'event_properties' => '{"databaseUuid":"00000000-0000-0000-0000-000000000000","userUuid":"3cf992e8-c041-43ca-beaf-e65564cc4f2d","name":"owner_db","driver":"mysql"}',
                'meta_data' => '{"aggregate-root-uuid":"00000000-0000-0000-0000-000000000000","created-at":"2022-04-15T15:46:26.224951Z","aggregate-root-version":1,"stored-event-id":3}',
                'created_at' => '2022-04-15 11:46:26',
            ),
            3 =>
            array (
                'id' => 4,
                'user_uuid' => NULL,
                'team_uuid' => NULL,
                'owner_uuid' => NULL,
                'aggregate_uuid' => 'e35bbf1d-88bc-40c2-a50a-6ebc171b9a06',
                'aggregate_version' => 1,
                'event_version' => 1,
                'event_class' => 'App\\StorableEvents\\TeamCreated',
                'event_properties' => '{"teamUuid":"e35bbf1d-88bc-40c2-a50a-6ebc171b9a06","name":"Owner Team","ownerUuid":"3cf992e8-c041-43ca-beaf-e65564cc4f2d","teamDatabaseUuid":"00000000-0000-0000-0000-000000000000","personalTeam":false}',
                'meta_data' => '{"aggregate-root-uuid":"e35bbf1d-88bc-40c2-a50a-6ebc171b9a06","created-at":"2022-04-15T15:46:26.251456Z","aggregate-root-version":1,"stored-event-id":4}',
                'created_at' => '2022-04-15 11:46:26',
            ),
            4 =>
            array (
                'id' => 5,
                'user_uuid' => NULL,
                'team_uuid' => NULL,
                'owner_uuid' => NULL,
                'aggregate_uuid' => 'bce67e94-f296-4b62-a983-7daedd38cccd',
                'aggregate_version' => 1,
                'event_version' => 1,
                'event_class' => 'App\\StorableEvents\\UserCreated',
                'event_properties' => '{"userUuid":"bce67e94-f296-4b62-a983-7daedd38cccd","name":"Admin","email":"admin@mailinator.com","password":"$2y$10$PzDR293zJKYYklNC7wtRguukYG5ZirjdGkfxtec\\/PCJ0py1ENYX8e","withPersonalTeam":false,"teamUuid":null,"teamName":null,"teamDatabaseUuid":null}',
                'meta_data' => '{"aggregate-root-uuid":"bce67e94-f296-4b62-a983-7daedd38cccd","created-at":"2022-04-15T15:46:26.318544Z","aggregate-root-version":1,"stored-event-id":5}',
                'created_at' => '2022-04-15 11:46:26',
            ),
            5 =>
            array (
                'id' => 6,
                'user_uuid' => NULL,
                'team_uuid' => NULL,
                'owner_uuid' => NULL,
                'aggregate_uuid' => '3c4a1c64-40b3-46db-ab58-1e9ae1cd4a8a',
                'aggregate_version' => 1,
                'event_version' => 1,
                'event_class' => 'App\\StorableEvents\\UserCreated',
                'event_properties' => '{"userUuid":"3c4a1c64-40b3-46db-ab58-1e9ae1cd4a8a","name":"Supervisor","email":"supervisor@mailinator.com","password":"$2y$10$BuTKFRdUh\\/H1FibUQvfx9.NQ6Y\\/Hp3MUZYOi9WecezQ.SXxZE5r\\/6","withPersonalTeam":false,"teamUuid":null,"teamName":null,"teamDatabaseUuid":null}',
                'meta_data' => '{"aggregate-root-uuid":"3c4a1c64-40b3-46db-ab58-1e9ae1cd4a8a","created-at":"2022-04-15T15:46:26.382658Z","aggregate-root-version":1,"stored-event-id":6}',
                'created_at' => '2022-04-15 11:46:26',
            ),
            6 =>
            array (
                'id' => 7,
                'user_uuid' => NULL,
                'team_uuid' => NULL,
                'owner_uuid' => NULL,
                'aggregate_uuid' => 'b2fdcd67-dee4-438d-8856-14a6794ff1d8',
                'aggregate_version' => 1,
                'event_version' => 1,
                'event_class' => 'App\\StorableEvents\\UserCreated',
                'event_properties' => '{"userUuid":"b2fdcd67-dee4-438d-8856-14a6794ff1d8","name":"Workforce","email":"workforce@mailinator.com","password":"$2y$10$mpivYxak7SB2w7bcs7YNiuUCjxUE9kZckHvMX\\/Hr36C2hbxIKfUSm","withPersonalTeam":false,"teamUuid":null,"teamName":null,"teamDatabaseUuid":null}',
                'meta_data' => '{"aggregate-root-uuid":"b2fdcd67-dee4-438d-8856-14a6794ff1d8","created-at":"2022-04-15T15:46:26.443649Z","aggregate-root-version":1,"stored-event-id":7}',
                'created_at' => '2022-04-15 11:46:26',
            ),
            7 =>
            array (
                'id' => 8,
                'user_uuid' => NULL,
                'team_uuid' => NULL,
                'owner_uuid' => NULL,
                'aggregate_uuid' => '56b0711e-0334-481d-803b-e63d5a179d6b',
                'aggregate_version' => 1,
                'event_version' => 1,
                'event_class' => 'App\\StorableEvents\\UserCreated',
                'event_properties' => '{"userUuid":"56b0711e-0334-481d-803b-e63d5a179d6b","name":"client","email":"client@mailinator.com","password":"$2y$10$ATHH.yo8dBVptwCsRPdTw.74wRhjNdGjczXUpgqZ4SozmCAofBTrG","withPersonalTeam":false,"teamUuid":null,"teamName":null,"teamDatabaseUuid":null}',
                'meta_data' => '{"aggregate-root-uuid":"56b0711e-0334-481d-803b-e63d5a179d6b","created-at":"2022-04-15T15:46:26.504664Z","aggregate-root-version":1,"stored-event-id":8}',
                'created_at' => '2022-04-15 11:46:26',
            ),
            8 =>
            array (
                'id' => 9,
                'user_uuid' => NULL,
                'team_uuid' => NULL,
                'owner_uuid' => NULL,
                'aggregate_uuid' => 'e35bbf1d-88bc-40c2-a50a-6ebc171b9a06',
                'aggregate_version' => 2,
                'event_version' => 1,
                'event_class' => 'App\\StorableEvents\\TeamMemberAdded',
                'event_properties' => '{"teamUuid":"e35bbf1d-88bc-40c2-a50a-6ebc171b9a06","email":"admin@mailinator.com","role":"admin"}',
                'meta_data' => '{"aggregate-root-uuid":"e35bbf1d-88bc-40c2-a50a-6ebc171b9a06","created-at":"2022-04-15T15:46:26.554667Z","aggregate-root-version":2,"stored-event-id":9}',
                'created_at' => '2022-04-15 11:46:26',
            ),
            9 =>
            array (
                'id' => 10,
                'user_uuid' => NULL,
                'team_uuid' => NULL,
                'owner_uuid' => NULL,
                'aggregate_uuid' => 'e35bbf1d-88bc-40c2-a50a-6ebc171b9a06',
                'aggregate_version' => 3,
                'event_version' => 1,
                'event_class' => 'App\\StorableEvents\\TeamMemberAdded',
                'event_properties' => '{"teamUuid":"e35bbf1d-88bc-40c2-a50a-6ebc171b9a06","email":"supervisor@mailinator.com","role":"supervisor"}',
                'meta_data' => '{"aggregate-root-uuid":"e35bbf1d-88bc-40c2-a50a-6ebc171b9a06","created-at":"2022-04-15T15:46:26.630855Z","aggregate-root-version":3,"stored-event-id":10}',
                'created_at' => '2022-04-15 11:46:26',
            ),
            10 =>
            array (
                'id' => 11,
                'user_uuid' => NULL,
                'team_uuid' => NULL,
                'owner_uuid' => NULL,
                'aggregate_uuid' => 'e35bbf1d-88bc-40c2-a50a-6ebc171b9a06',
                'aggregate_version' => 4,
                'event_version' => 1,
                'event_class' => 'App\\StorableEvents\\TeamMemberAdded',
                'event_properties' => '{"teamUuid":"e35bbf1d-88bc-40c2-a50a-6ebc171b9a06","email":"workforce@mailinator.com","role":"workforce"}',
                'meta_data' => '{"aggregate-root-uuid":"e35bbf1d-88bc-40c2-a50a-6ebc171b9a06","created-at":"2022-04-15T15:46:26.730028Z","aggregate-root-version":4,"stored-event-id":11}',
                'created_at' => '2022-04-15 11:46:26',
            ),
            11 =>
            array (
                'id' => 12,
                'user_uuid' => NULL,
                'team_uuid' => NULL,
                'owner_uuid' => NULL,
                'aggregate_uuid' => 'e35bbf1d-88bc-40c2-a50a-6ebc171b9a06',
                'aggregate_version' => 5,
                'event_version' => 1,
                'event_class' => 'App\\StorableEvents\\TeamMemberAdded',
                'event_properties' => '{"teamUuid":"e35bbf1d-88bc-40c2-a50a-6ebc171b9a06","email":"client@mailinator.com","role":"client"}',
                'meta_data' => '{"aggregate-root-uuid":"e35bbf1d-88bc-40c2-a50a-6ebc171b9a06","created-at":"2022-04-15T15:46:26.861491Z","aggregate-root-version":5,"stored-event-id":12}',
                'created_at' => '2022-04-15 11:46:26',
            ),
            12 =>
            array (
                'id' => 13,
                'user_uuid' => '3cf992e8-c041-43ca-beaf-e65564cc4f2d',
                'team_uuid' => 'e35bbf1d-88bc-40c2-a50a-6ebc171b9a06',
                'owner_uuid' => '3cf992e8-c041-43ca-beaf-e65564cc4f2d',
                'aggregate_uuid' => 'e35bbf1d-88bc-40c2-a50a-6ebc171b9a06',
                'aggregate_version' => 6,
                'event_version' => 1,
                'event_class' => 'App\\StorableEvents\\TeamCompanyDataUpdated',
                'event_properties' => '{"teamUuid":"e35bbf1d-88bc-40c2-a50a-6ebc171b9a06","companyData":{"address":{"city":"Acworth","state":"GA","zip":"30101","street":"4494 Acworth Industrial Drive,","country":"USA","lineTwo":"Suit 103"},"name":null,"website":null,"email":null,"phone":"404-587-4272","fax":"770-485-0196"}}',
                'meta_data' => '{"aggregate-root-uuid":"e35bbf1d-88bc-40c2-a50a-6ebc171b9a06","created-at":"2022-04-15T16:03:31.419850Z","aggregate-root-version":6,"stored-event-id":13}',
                'created_at' => '2022-04-15 12:03:31',
            ),
            13 =>
            array (
                'id' => 14,
                'user_uuid' => '3cf992e8-c041-43ca-beaf-e65564cc4f2d',
                'team_uuid' => 'e35bbf1d-88bc-40c2-a50a-6ebc171b9a06',
                'owner_uuid' => '3cf992e8-c041-43ca-beaf-e65564cc4f2d',
                'aggregate_uuid' => 'e35bbf1d-88bc-40c2-a50a-6ebc171b9a06',
                'aggregate_version' => 7,
                'event_version' => 1,
                'event_class' => 'App\\StorableEvents\\TeamCompanyDataUpdated',
                'event_properties' => '{"teamUuid":"e35bbf1d-88bc-40c2-a50a-6ebc171b9a06","companyData":{"address":{"city":"Little Rock","state":"AR","zip":"72201","street":"4494 Acme Industrial Drive","country":"USA","lineTwo":"Suit 103"},"name":null,"website":null,"email":null,"phone":"555-555-5555","fax":"555-555-5555"}}',
                'meta_data' => '{"aggregate-root-uuid":"e35bbf1d-88bc-40c2-a50a-6ebc171b9a06","created-at":"2022-04-15T16:11:03.242046Z","aggregate-root-version":7,"stored-event-id":14}',
                'created_at' => '2022-04-15 12:11:03',
            ),
        ));


    }
}
