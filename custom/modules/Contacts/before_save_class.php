<?php

    if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

    class before_save_class
    {
        function before_save_method($contactBean, $event, $arguments)
        {
            //$bean->phone_mobile = 03044996054;
            $contactBean->first_name = 'chris';
            $contactBean->last_name = 'hall';
            //Load the relationship
            if ($contactBean->fetched_row['title']) {
                $optBean = BeanFactory::getBean('Opportunities');
                $optBean->load_relationship('opportunities');
                $optBean->name = 'Test opp 2';
                $optBean->save();
                $contactBean->opportunities->add($optBean->id);

                $accountBean = BeanFactory::getBean('Accounts');
                $accountBean->load_relationship('opportunities');
                $accountBean->name = 'Test account 2';
                // $beanList = $accountBean->get_full_list(
                //     //Order by the accounts name
                //     'name',
                    
                // );
                $accountBean->save();
                $accountBean->opportunities->add($optBean->id);

                $relatedBeans = null;
                if ($contactBean->load_relationship('opportunities')){
                    //Fetch related beans
                    $relatedBeans = $contactBean->opportunities->getBeans();
                    $relateField = null;
                    foreach($relatedBeans as $relateBean){
                        $relateField = $relateBean;
                        $relateBean->description = 'This is related beans description!';
                        $relateBean->save();
                        $GLOBALS['log']->fatal('beanList name == ', $relateBean->description);
                    }

                }
                
            } else {
                //existing record
                $GLOBALS['log']->fatal('this is else log== ', $contactBean->title);
            }
            

            //$GLOBALS['log']->fatal('My test logs', $contactBean->first_name);
            
        }
    }

?>
