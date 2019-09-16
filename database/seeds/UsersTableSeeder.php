<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $user1 = App\User::create([
            'name'         => 'Princewill',
            'lastname'     => 'Opah',
            'admin'        => 1,
            'email'        => 'princewillopah@gmail.com',
            'password'     => bcrypt('prince'),
            'walletId'     => 'yfytfyfffghcfhcvgvcghcghghcghhgcghghcghcghnhg',
            'photo'        => 'uploads/placeholders/avatar.png',
            'phone'        => '+12344334455',
            // 'address'      => '12 okorogro street ajegunle lagos',
        ]);
        $user2 = App\User::create([
            'name'         => 'prince',
            'lastname'     => 'opah',
            'admin'        =>  0,
            'email'        => 'opah@gmail.com',
            'password'     => bcrypt('prince'),
            'walletId'     => 'yfytfyfffghcfhcvgvcghcghghcghhgcghghcghcghnhg',
            'photo'        => 'uploads/placeholders/avatar.png',
            'phone'        => '+1344334455',
            // 'address'      => '78 okorogro street ajegunle lagos',
        ]);
        $user3 = App\User::create([
            'name'         => 'john',
            'lastname'     => 'pah',
            'admin'        =>  0,
            'email'        => 'jp@gmail.com',
            'password'     => bcrypt('prince'),
            'walletId'     => 'yfytfyfffghcfhcvgvcghcghghcghhgcghghcghcghnhg',
            'photo'        => 'uploads/placeholders/avatar.png',
            'phone'        => '+42344334455',
            // 'address'      => '45 okorogro street ajegunle lagos',
        ]);
        $user4 = App\User::create([
            'name'         => 'drake',
            'lastname'     => 'hapes',
            'admin'        =>  0,
            'email'        => 'drakesh@gmail.com',
            'password'     => bcrypt('prince'),
            'walletId'     => 'yfytfyfffghcfhcvgvcghcghghcghhgcghghcghcghnhg',
            'photo'        => 'uploads/placeholders/avatar.png',
            'phone'        => '+72344334455',
            // 'address'      => '76 okorogro street ajegunle lagos',
        ]);
      
        
// ===============balnces=======================================
            App\Balance::create([
                'user_id'         => $user1->id,
                'balance'  => '67667.00',
            ]);
            App\Balance::create([
                'user_id'         => $user2->id,
                'balance'  => '5687.00',
            ]);
            App\Balance::create([
                'user_id'         => $user3->id,
                'balance'  => '55434.00',
            ]);
            App\Balance::create([
                'user_id'         => $user4->id,
                'balance'  => '5434.00',
            ]);
// ===================withdrawals=============================================

            App\Withdrawal::create([
                'user_id'         => $user3->id,
                'withdrwal_amount'  => '7667.00',
            ]);
            App\Withdrawal::create([
                'user_id'         => $user3->id,
                'withdrwal_amount'  => '677.00',
            ]);
            App\Withdrawal::create([
                'user_id'         => $user2->id,
                'withdrwal_amount'  => '5434.00',
            ]);
            App\Withdrawal::create([
                'user_id'         => $user1->id,
                'withdrwal_amount'  => '868.00',
            ]);
            
// ===================deposits=============================================

            App\Deposit::create([
                'user_id'         => $user1->id,
                'deposit_amount'  => '7667.00',
            ]);
            App\Deposit::create([
                'user_id'         => $user1->id,
                'deposit_amount'  => '677.00',
            ]);
            App\Deposit::create([
                'user_id'         => $user2->id,
                'deposit_amount'  => '5434.00',
            ]);
            App\Deposit::create([
                'user_id'         => $user3->id,
                'deposit_amount'  => '868.00',
            ]);
            
        
        App\Nextofkin::create([
            'user_id'         => $user1->id,
            'name'    => 'Olumelu',
            'phone'    => '+756546577687',
            'email'  => 'Olumelu@gmail.com',
        ]);

        App\Nextofkin::create([
            'user_id'         => $user2->id,
            'name'    => 'tony Olumelu',
            'phone'    => '+756546577687',
            'email'  => 'tonyOlumelu@gmail.com',
        ]);
        App\Nextofkin::create([
            'user_id'         => $user3->id,
            'name'    => 'green Olumelu',
            'phone'    => '+756546577687',
            'email'  => 'green@gmail.com',
        ]);
    }
}
