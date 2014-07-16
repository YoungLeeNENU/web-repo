update user_info set status=1 where user_name="maverick";

update bak set status=1 where user_name="maverick";

update bak set status=(select status from user_info where user_name='maverick')^1 where user_name="maverick";

update user_info set status=status^1 where user_name="maverick";
