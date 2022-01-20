package com.example.loginui;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Context;
import android.content.SharedPreferences;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;

public class SignUpActivity extends AppCompatActivity {
    private EditText fullname;
    private EditText emailid;
    private EditText password;
    private EditText confirmpassword;
    private EditText mobile;
    private Button registerbtn;
    private final String CREDENTIAL_SHARED_PREF = " our_shared_pref";
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_sign_up);
        fullname= findViewById(R.id.fullname);
        emailid= findViewById(R.id.emailid);
        password= findViewById(R.id.password);
        confirmpassword= findViewById(R.id.confirmpassword);
        mobile= findViewById(R.id.mobile);
        registerbtn= findViewById(R.id.registerbtn);
        registerbtn.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                String strPassword=password.getText().toString();
                String strConfirmPassword=confirmpassword.getText().toString();
                String strEmailId=emailid.getText().toString();
                if(strPassword!=null && strConfirmPassword!=null && strPassword.equalsIgnoreCase(strConfirmPassword))
                {
                    SharedPreferences credentials = getSharedPreferences(CREDENTIAL_SHARED_PREF, Context.MODE_PRIVATE);
                    SharedPreferences.Editor editor = credentials.edit();
                    editor.putString("password" , strPassword);
                    editor.commit();
                    SignUpActivity.this.finish();
                }
            }
        });



    }
}