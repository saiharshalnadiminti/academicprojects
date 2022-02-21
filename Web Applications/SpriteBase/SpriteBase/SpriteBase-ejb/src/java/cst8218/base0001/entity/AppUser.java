/**********************************************************************
 * Filename: AppUser.java                                       
 * Author: Rishabh Kansara, Saiharshal Nadiminti                                          
 * StudentNo:  040979380, 040982223                                             
 * Course Name/Number: Web Enterprise Applications   CST8218                              
 * Lab Sect: 301                                                     
 * Assignment #:2
 * Assignment name: Sprite Base
 * Due Date: August 11 2021                                           
 * Submission Date: August 11 2021 
 * Professor: Yamen Nasrallah          
 *********************************************************************/
/*
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package cst8218.base0001.entity;

import java.io.Serializable;
import java.util.Date;
import java.util.HashMap;
import javax.enterprise.inject.Instance;
import javax.enterprise.inject.spi.CDI;
import javax.persistence.Basic;
import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.Id;
import javax.persistence.NamedQueries;
import javax.persistence.NamedQuery;
import javax.persistence.Table;
import javax.persistence.Temporal;
import javax.persistence.TemporalType;
import javax.security.enterprise.identitystore.PasswordHash;
import javax.security.enterprise.identitystore.Pbkdf2PasswordHash;
import javax.validation.constraints.NotNull;
import javax.validation.constraints.Size;
import javax.xml.bind.annotation.XmlRootElement;

/**
 *
 * @author Harshal
 */
@Entity
@Table(name = "AppUser")
@XmlRootElement
@NamedQueries({
    @NamedQuery(name = "AppUser.findAll", query = "SELECT c FROM AppUser c"),
    @NamedQuery(name = "AppUser.findByUserId", query = "SELECT c FROM AppUser c WHERE c.userid = :userid"),
    @NamedQuery(name = "AppUser.findByGroupName", query = "SELECT c FROM AppUser c WHERE c.groupname = :groupname"),})
public class AppUser implements Serializable {

    private static final long serialVersionUID = 1L;
    @Id
    @Basic(optional = false)
    @NotNull
    @Column(name = "ID")
    private String userid;

    @Size(max = 255)
    @Column(name = "GROUPNAME")
    private String groupname;
    @Size(max = 255)
    @Column(name = "PASSWORD")
    private String password;

    public AppUser() {
    }

    public AppUser(String userid) {
        this.userid = userid;
    }

    public String getId() {
        return userid;
    }

    public void setId(String id) {
        this.userid = id;
    }

    public String getGroupName() {
        return groupname;
    }

    public void setGroupName(String gname) {
        this.groupname = gname;
    }

    public String getPassword() {
        Instance<? extends PasswordHash> instance = CDI.current().select(Pbkdf2PasswordHash.class);
        PasswordHash passwordHash = instance.get();
        passwordHash.initialize(new HashMap<String, String>()); // todo: are the defaults good enough?
        String password = "mySecretPassword"; //pretend the user has chosen a password mySecretPassword
        password = passwordHash.generate(password.toCharArray());
        return password;
    }

    public void setPassword(String pass) {
        this.password = pass;
    }

    @Override
    public int hashCode() {
        int hash = 0;
        hash += (userid != null ? userid.hashCode() : 0);
        return hash;
    }

    @Override
    public boolean equals(Object object) {
        // TODO: Warning - this method won't work in the case the id fields are not set
        if (!(object instanceof AppUser)) {
            return false;
        }
        AppUser other = (AppUser) object;
        if ((this.userid == null && other.userid != null) || (this.userid != null && !this.userid.equals(other.userid))) {
            return false;
        }
        return true;
    }

    @Override
    public String toString() {
        return "com.mycompany.lab4web.AppUser[ id=" + userid + " ]";
    }

}
