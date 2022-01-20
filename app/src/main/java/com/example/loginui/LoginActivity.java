package com.example.loginui;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Context;
import android.content.Intent;
import android.content.SharedPreferences;
import android.os.Bundle;
import android.view.View;
import android.widget.EditText;
import android.widget.Button;
import android.widget.Toast;

import java.util.ResourceBundle;

public class LoginActivity extends AppCompatActivity {
    private EditText emailid;
    private EditText password;
    private Button  loginbtn;
    private Button registerbtn;
    private final String CREDENTIAL_SHARED_PREF = " our_shared_pref";


    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_login);
        emailid= findViewById(R.id.emailid);
        password= findViewById(R.id.password);
        loginbtn= findViewById(R.id.loginbtn);
        registerbtn= findViewById(R.id.registerbtn);

        registerbtn.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent intent=new Intent(LoginActivity.this,SignUpActivity.class);
                startActivity(intent);
            }
        });
        loginbtn.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                SharedPreferences credentials=getSharedPreferences(CREDENTIAL_SHARED_PREF, Context.MODE_PRIVATE);
                String stremailid = credentials.getString( "Email id", null);
                String strpassword= credentials.getString("Password", null);
                String email_from_ed= emailid.getText().toString();
                String password_from_ed= password.getText().toString();
                if(stremailid!=null && email_from_ed != null && stremailid.equalsIgnoreCase(email_from_ed)) {
                    if (strpassword != null && password_from_ed != null && strpassword.equalsIgnoreCase(password_from_ed)) {
                        Toast.makeText(LoginActivity.this, "Login Successfull", Toast.LENGTH_SHORT).show();
                    } else {

                        Toast.makeText(LoginActivity.this, "Login Failed", Toast.LENGTH_SHORT).show();
                    }
                }
                else
                {
                    Toast.makeText(LoginActivity.this, "Login Failed", Toast.LENGTH_SHORT).show();
                }
            }




        });


    }
}